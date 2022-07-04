<?php
if (!defined('IN_SCRIPT')) {die('Invalid attempt!');}
$config = array(
    "name" => "BitcoinV", // Coin name/title
    "symbol" => "BTCV", // Coin symbol
    "description" => "You can browse BitcoinV block details and transaction detaisl with BitcoinV Block Explorer.",
    "homepage" => "http://localhost/explorer",
    "root_path" => "/", //start with '/', end with '/'
    "copy_name" => "bitcoinv.org",
    "start_year" => 2019,
    "explorer_name" => "BitcoinV Block Explorer",
    "explorer_path" => "explorer/", //do not start with '/',  but end with '/', if root write ""
    "theme" => "theme1",
    "url_rewrite" => true,
    "rpc_host" => "127.0.0.1", // Host/IP for the daemon
    "rpc_port" => 48931, // RPC port for the daemon
    "rpc_user" => "your-wallet-rpc-user", // 'rpcuser' from the coin's .conf
    "rpc_password" => "your-wallet-rpc-password", // 'rpcpassword' from the coin's .conf
    "proofof" => "pos", //pow,pos
    "total_amount" => 42000000,
    "block_reward" => 10,
    "genesis_block_timestamp" => 1551225600,
    "nTargetTimespan" => 600, //14 * 24 * 60 * 60
    "nTargetSpacing" => 600, //3 * 60
    "blocks_per_page" => 20,
    "date_format" => "Y-m-d H:i:s",
    "refresh_interval" => 180, //seconds
    "retarget_diff_since" => 0,
);
