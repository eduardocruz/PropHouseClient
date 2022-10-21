<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {

        $client = new \GraphQL\Client(
            'https://prod.backend.prop.house/graphql'
        );

        $gql = (new \GraphQL\Query('communities'))
            ->setSelectionSet(
                [
                    'id',
                    'name',
                    'description',
                    'profileImageUrl'
                ]
            );

        $response = $client->runQuery($gql);
        $data = $response->getData();
        $communities = collect($data->communities);
        //return dd($communities->first());

        return view('communities.index', compact('communities'));
    }
}
