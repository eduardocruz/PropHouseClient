<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div>
    <div class="relative overflow-hidden bg-gray-50">
        <div class="hidden sm:absolute sm:inset-y-0 sm:block sm:h-full sm:w-full" aria-hidden="true">
            <div class="relative mx-auto h-full max-w-7xl">
                <svg class="absolute right-full translate-y-1/4 translate-x-1/4 transform lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                </svg>
                <svg class="absolute left-full -translate-y-3/4 -translate-x-1/4 transform md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
                </svg>
            </div>
        </div>

        <div class="relative pt-6 pb-16 sm:pb-24">
            <div>
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
                        <div class="flex flex-1 items-center md:absolute md:inset-y-0 md:left-0">
                            <div class="flex w-full items-center justify-between md:w-auto">
                                <a href="#">
                                    <span class="sr-only">Your Company</span>
                                    <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                                </a>
                                <div class="-mr-2 flex items-center md:hidden">
                                    <button type="button" class="inline-flex items-center justify-center rounded-md bg-gray-50 p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                                        <span class="sr-only">Open main menu</span>
                                        <!-- Heroicon name: outline/bars-3 -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:flex md:space-x-10">
                            <a href="https://nouns.wtf" class="font-medium text-gray-500 hover:text-gray-900">Nouns.wtf</a>

                            <a href="https://prop.house" class="font-medium text-gray-500 hover:text-gray-900">Prop House</a>

                            <a href="https://prop.house/nouns/prop-house-hackathon" class="font-medium text-gray-500 hover:text-gray-900">Nouns Hackaton</a>

                        </div>
                        <div class="hidden md:absolute md:inset-y-0 md:right-0 md:flex md:items-center md:justify-end">

                            {{--
            <span class="inline-flex rounded-md shadow">
              <a href="#" class="inline-flex items-center rounded-md border border-transparent bg-white px-4 py-2 text-base font-medium text-indigo-600 hover:bg-gray-50">Log in</a>
            </span>
            --}}
                        </div>
                    </nav>
                </div>

                <!--
                  Mobile menu, show/hide based on menu open state.

                  Entering: "duration-150 ease-out"
                    From: "opacity-0 scale-95"
                    To: "opacity-100 scale-100"
                  Leaving: "duration-100 ease-in"
                    From: "opacity-100 scale-100"
                    To: "opacity-0 scale-95"
                -->
                <div class="absolute inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden">
                    <div class="overflow-hidden rounded-lg bg-white shadow-md ring-1 ring-black ring-opacity-5">
                        <div class="flex items-center justify-between px-5 pt-4">
                            <div>
                                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                            </div>
                            <div class="-mr-2">
                                <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x-mark -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="px-2 pt-2 pb-3">
                            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Product</a>

                            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Features</a>

                            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Marketplace</a>

                            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Company</a>
                        </div>
                        <a href="#" class="block w-full bg-gray-50 px-5 py-3 text-center font-medium text-indigo-600 hover:bg-gray-100">Log in</a>
                    </div>
                </div>
            </div>

            <main class="mx-auto mt-16 max-w-7xl px-4 sm:mt-24">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Prop House</span>
                        <span class="block text-indigo-600 xl:inline">Client ⌐◨-◨</span>
                    </h1>
                    <p class="mx-auto mt-3 max-w-md text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl">
                        This is an MVP for a Nouns Prop House proposal. The goal is to use the new Prop House graphQL to
                        extendo the features and usability already provided by Prop House.
                    </p>

                    <div class="mx-auto mt-5 max-w-md sm:flex sm:justify-center md:mt-8">


                        <div class="rounded-md shadow">
                            <a href="/auctions" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 md:py-4 md:px-10 md:text-lg">
                                Open Auctions
                            </a>
                        </div>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            <a href="/communities" class="flex w-full items-center justify-center rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50 md:py-4 md:px-10 md:text-lg">
                                Communities
                            </a>
                        </div>
                    </div>
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-8">
                        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            @foreach($auctions as $auction)
                                <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow">
                                    <div class="flex w-full items-center justify-between space-x-6 p-6">
                                        <a href="/auctions/{{$auction->id}}" class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center rounded-bl-lg border border-transparent py-4 text-sm font-medium text-gray-700 hover:text-gray-500">

                                        <div class="flex-1 truncate">
                                            <div class="flex items-center space-x-3">
                                                <h3 class="truncate text-sm font-medium text-gray-900">{{$auction->title}}</h3>
                                                <span class="inline-block flex-shrink-0 rounded-full bg-green-100 px-2 py-0.5 text-xs font-medium text-green-800">({{$auction->community->name}})</span>
                                            </div>
                                            <p class="mt-1 truncate text-sm text-gray-500">{{$auction->description}}</p>
                                        </div>
                                        <img class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-300"
                                             src="{{$auction->community->profileImageUrl}}"
                                             alt="">
                                        </a>
                                    </div>
                                    <div>
                                        <div class="-mt-px flex divide-x divide-gray-200">
                                            <div class="flex w-0 flex-1">
                                                <a href="/auctions/{{$auction->id}}" class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center rounded-bl-lg border border-transparent py-4 text-sm font-medium text-gray-700 hover:text-gray-500">
                                                    <span class="ml-3">
                                                        Submission Deadline: <br/>
                                                        {{\Carbon\Carbon::parse($auction->proposalEndTime)->diffForHumans()}}
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="-ml-px flex w-0 flex-1">
                                                <a href="/auctions/{{$auction->id}}" class="relative inline-flex w-0 flex-1 items-center justify-center rounded-br-lg border border-transparent py-4 text-sm font-medium text-gray-700 hover:text-gray-500">
                                                    <span class="ml-3">
                                                        Funding: <br/>
                                                        {{$auction->numWinners}} x
                                                        {{$auction->fundingAmount}}{{$auction->currencyType}}
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>

            </main>

        </div>
        <footer class="bg-white">
            <div class="mx-auto max-w-7xl overflow-hidden py-12 px-4 sm:px-6 lg:px-8">
                <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
                    <div class="px-5 py-2">
                        <a href="https://nouns.wtf" class="text-base text-gray-500 hover:text-gray-900">Nouns.wtf</a>
                    </div>

                    <div class="px-5 py-2">
                        <a href="https://prop.house" class="text-base text-gray-500 hover:text-gray-900">Prop House</a>
                    </div>

                    <div class="px-5 py-2">
                        <a href="https://prop.house/nouns/prop-house-hackathon" class="text-base text-gray-500 hover:text-gray-900">Nouns Prop House Hackaton</a>
                    </div>
                </nav>
                <p class="mt-8 text-center text-base text-gray-400">Prop House Client ⌐◨-◨. A Nouns Prop House hackaton submission.</p>
            </div>
        </footer>
    </div>

</div>



</body>
</html>
