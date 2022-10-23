<?php

namespace App\Http\Controllers;

use GraphQL\Query;
use GraphQL\RawObject;
use Illuminate\Http\Request;


class AuctionController extends Controller
{


    public function open()
    {
        $client = new \GraphQL\Client('https://prod.backend.prop.house/graphql');

        $gql = (new \GraphQL\Query('auctionsByStatus'))
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
                    (new Query('community'))
                        ->setSelectionSet(
                            [
                                'name',
                                'profileImageUrl',
                                'description'
                            ]
                        ),
                    (new Query('proposals'))
                        ->setSelectionSet(
                            [
                                'id',
                                'title',
                                'what',
                                'voteCount',
                                'createdDate'
                            ]
                        )
                ]
            );

        $response = $client->runQuery($gql);
        $data = $response->getData();
        $auctions = collect($data->auctionsByStatus);
        return view('auctions.open', compact('auctions'));
    }

    public function home()
    {
        $client = new \GraphQL\Client('https://prod.backend.prop.house/graphql');

        $gql = (new \GraphQL\Query('auctionsByStatus'))
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
                    (new Query('community'))
                        ->setSelectionSet(
                            [
                                'name',
                                'profileImageUrl',
                                'description'
                            ]
                        )
                ]
            );

        $response = $client->runQuery($gql);
        $data = $response->getData();
        $auctions = collect($data->auctionsByStatus);
        return view('prophouse', ['auctions' => $auctions->sortBy('proposalEndTime')]);
    }

    public function show($auction_id)
    {

        $client = new \GraphQL\Client('https://prod.backend.prop.house/graphql');

        $gql = (new \GraphQL\Query('auction'))
            ->setArguments(['id' => new RawObject($auction_id)])
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
                    (new Query('community'))
                        ->setSelectionSet(
                            [
                                'name',
                                'profileImageUrl',
                                'description'
                            ]
                        ),
                    (new Query('proposals'))
                        ->setSelectionSet(
                            [
                                'id',
                                'title',
                                'what',
                                'voteCount',
                                'createdDate'
                            ]
                        )
                ]
            );

        $response = $client->runQuery($gql);
        $data = $response->getData();
        $auction = $data->auction;
        //return dd($auction);
        return view('auctions.show', compact('auction'));
    }
}
