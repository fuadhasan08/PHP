<?php
    /*
        List of ID for Coins

        Crypto.com = 3635;
        Helium = 5665
        The Graph = 6719
        1inch Network = 8104
        Avalanche = 5805
        Polkadot = 6636
        Cosmos = 3794
        Algorand = 4030
        Render Token - 5690
        Bitgert - 11079
        Oasis Network - 7653
        Hedera - 4642
        XRP - 52
        Dogecoin - 74
        SHIBA INU - 5994
        Opacity - 3632
        Velo - 7127
        BitTorrent - 3718
        Chainlink - 1975
        FTX Token - 4195
        Cardano - 2010
        Harmony - 3945
        Fantom - 3513
        Decentraland - 1966
        The Sandbox- 6210
        Gala - 7080
        Highstreet - 11232
        Somnium Space Cubes- 5338
        Rfox - 7654
        Bloktopia - 11206
        Star Atlas- 11212
        Solana - 5426
        Metahero - 10778
        Kadena - 5647
        Terra - 4172
 

    */ 
    $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest';
    $parameters = [
        // 'start'   => '1',
        // 'limit'   => '5000',
        'convert' => "USD",
        "id" => "6719,8104,3945,3635,5665,5805,6636,3794,4030,5690,11079,7653,4642,52,74,5994,3632,7127,3718,1975,4195,2010,3513,1966,6210,7080,11232,5338,7654,11206,11212,5426,10778,5647,4172"
        // Crypto, Helium, The Graph, 1inch, Avalanche, Polkadot, Cosmos, Algorand, Render Token, Bitgert, Oasis Network, Hedera, XRP, Dogecoin, SHIBA, Opacity, Velo, BitTorrent, Chainlink, FTX, Cardano, Harmony, Fantom, Decentraland, Sandbox, Gala, Highstreet, Somnium, Rfox, Bloktopia, Star Atlas, Solana, Metahero, Kadena, Terra
    ];

    //,6636,3794,4030,5690,11079,7653,4642,52,74,5994,3632,7127,3718,1975,4195,2010,3945,3513,1966,6210,7080,11232,5338,7654,11206,11212,5406,10778,5647,4172

    $id_arr = [
        "The Graph" => 6719,
        "1inch Network" => 8104,
        "Harmony" => 3945,
        "Crypto.com" => 3635,
        "Helium" => 5665,
        "Avalanche" => 5805,
        "Polkadot" => 6636,
        "Cosmos" => 3794,
        "Algorand" => 4030,
        "Render Token" => 5690,
        "Bitgert" => 11079,
        "Oasis Network" => 7653,
        "Hedera" => 4642,
        "XRP" => 52,
        "Dogecoin" => 74,
        "SHIBA INU" => 5994,
        "Opacity" => 3632,
        "Velo" => 7127,
        "BitTorrent" => 3718,
        "Chainlink" => 1975,
        "FTX Token" => 4195,
        "Cardano" => 2010,
        "Fantom" => 3513,
        "Decentraland" => 1966,
        "The Sandbox" => 6210,
        "Gala" => 7080,
        "Highstreet" => 11232,
        "Somnium Space Cubes" => 5338,
        "Rfox" => 7654,
        "Bloktopia" => 11206,
        "Star Atlas" => 11212,
        "Solana" => 5426,
        "Metahero" => 10778,
        "Kadena" => 5647,
        "Terra" => 4172
    ];

    $stock = [
        "The Graph" => 20.40816327,
        "1inch Network" => 3.76010528,
        "Harmony" => 38.80983182,
        "Crypto.com" => 3635,
        "Helium" => 5665,
        "Avalanche" => 5805,
        "Polkadot" => 6636,
        "Cosmos" => 3794,
        "Algorand" => 4030,
        "Render Token" => 5690,
        "Bitgert" => 11079,
        "Oasis Network" => 7653,
        "Hedera" => 4642,
        "XRP" => 52,
        "Dogecoin" => 74,
        "SHIBA INU" => 5994,
        "Opacity" => 3632,
        "Velo" => 7127,
        "BitTorrent" => 3718,
        "Chainlink" => 1975,
        "FTX Token" => 4195,
        "Cardano" => 2010,
        "Fantom" => 3513,
        "Decentraland" => 1966,
        "The Sandbox" => 6210,
        "Gala" => 7080,
        "Highstreet" => 11232,
        "Somnium Space Cubes" => 5338,
        "Rfox" => 7654,
        "Bloktopia" => 11206,
        "Star Atlas" => 11212,
        "Solana" => 5426,
        "Metahero" => 10778,
        "Kadena" => 5647,
        "Terra" => 4172
    ];

    $headers = [
        'Accepts: application/json',
        'X-CMC_PRO_API_KEY: c441cfc6-2b5b-4c15-83d1-df81d66537ca',
        'Accept-Encoding: deflate'
    ];
    $qs = http_build_query( $parameters ); // query string encode the parameters
    $request = "{$url}?{$qs}"; // create the request URL

    $curl = curl_init(); // Get cURL resource
    // Set cURL options
    curl_setopt_array( $curl, array(
        CURLOPT_URL => $request, // set the request URL
        CURLOPT_HTTPHEADER => $headers, // set the headers
        CURLOPT_RETURNTRANSFER => 1, // ask for raw response instead of bool
    ) );

    $response = curl_exec( $curl ); // Send the request, save the response
    $data = json_decode( $response, true ); // store json decoded response in array

    //$price = $data["data"][0]["quote"]["USD"]["price"];
    curl_close( $curl ); // Close request
    ?>