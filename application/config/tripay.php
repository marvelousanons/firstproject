<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['tripay_merchant_code'] = 'T28268';
$config['tripay_api_key'] = 'KEQybgAHz219uknfBpW7ziHf9hDsdFcxP5au73HG';
$config['tripay_private_key'] = 'sPMbt-VCbTW-YtAOx-w4Cfd-PGHsq';
$config['tripay_base_url'] = 'https://tripay.co.id/api'; // Use https://tripay.co.id/api for production
$config['tripay_callback_url'] = base_url('api/tripay');
$config['tripay_return_url'] = base_url('api/tripay/tripay_return');
// $config['tripay_base_url'] = 'https://tripay.co.id/api-sandbox';
