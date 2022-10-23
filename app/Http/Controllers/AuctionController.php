<?php

namespace App\Http\Controllers;

use GraphQL\RawObject;
use Illuminate\Http\Request;


class AuctionController extends Controller
{


    public function open()
    {



        $client = new \GraphQL\Client(
            'https://prod.backend.prop.house/graphql'
        );

        $gql = (new \GraphQL\Query('auctionsByStatus'))
            //->setArguments(['status' => 'Open'])
            ->setArguments(['status' => new RawObject('Open')])
            ->setSelectionSet(
                [
                    'id',
                    'title',
                    'status',
                    'startTime',
                    'proposalEndTime',
                    'fundingAmount',
                    'currencyType',
                    'description',
                    'numWinners',
                ]
            );

        $response = $client->runQuery($gql);
        $data = $response->getData();
        $auctions = collect($data->auctionsByStatus);
        //return dd($auctions->first());
        return view('auctions.open', compact('auctions'));
    }
}