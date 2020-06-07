<?php


namespace App\Http\Controllers;


use App\BaseModel;
use App\Exceptions\ApplicationException;
use App\Http\Resources\InventoryResource;
use App\ItemBlueprint;
use App\User;
use App\Util\ItemFactory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function get(Request $request)
    {
        $user = $this->getUser($request->headers->get('token'));

        return new InventoryResource($user);
    }

    public function buy(Request $request)
    {
        $this->getUser($request->headers->get('token'));

        //TODO add specific request type with validation to require type and name
        $blueprint = ItemBlueprint::getForTypeAndName($request->get('type'), $request->get('name'));

        if( !$blueprint ){
            return ApplicationException::ItemBlueprintNotFound();
        }

        $model = ItemFactory::getModelForType($blueprint->type);

        try{
            $model = $this->populateModel($model, $blueprint, $request->headers->get('token'));
            $model->save();
        } catch(\Exception $e){
            //Internal error between blueprint and item or temporary database down
            return ApplicationException::TemporaryServiceError();
        }

        return $model->getResource();
    }

    //TODO replace with middleware authentication
    private function getUser($token)
    {
        $user = User::getForToken($token);

        if( !$user ){
            return ApplicationException::UserNotFound();
        }

        return $user;
    }

    private function populateModel(BaseModel $model, ItemBlueprint $blueprint, string $token)
    {
        $model->fill($this->getModelAttributes($blueprint->attributes));
        $model->user_id = User::getForToken($token)->id;

        return $model;
    }

    private function getModelAttributes(string $jsonAttributes)
    {
        return json_decode($jsonAttributes, true);
    }
}
