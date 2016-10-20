<?php
require __DIR__.'/vendor/autoload.php';

use \DTS\eBaySDK\Constants;
use \DTS\eBaySDK\Browse\Services;
use \DTS\eBaySDK\Browse\Types;
use \DTS\eBaySDK\Browse\Enums;

$service = new Services\BrowseService([
    'authorization' => 'v^1.1#i^1#f^0#p^1#I^3#r^0#t^H4sIAAAAAAAAAOVXa2wUVRTutts2WCrYVCgPYTOiRnFm7+zsY3ZgRxZaaAOlpbu0UINkHnfbsbMzw9y77K4aXUrEkDSoiJooRIjCDzURX0FFE0yMsSYE9YeY+IigCIn4iA8Eg+id7VK2VSnCakicP5N7zrnnfuc759wHyFWNu2lD84Zfal3V5dtzIFfucrE1YFxV5ewrK8qnVpaBIgPX9tysnLu/4thcJCV1S+iAyDINBD2ZpG4gIS+MUCnbEEwJaUgwpCREAlaEWLR1ieBjgGDZJjYVU6c8LY0RSoZ+jlMCoQTnD/FQThCpcdZn3IxQMMwCKPOAZ/1+XoWA6BFKwRYDYcnAEcoH2CDNAtoH4mxQYEMCyzEBnuumPJ3QRpppEBMGUGIerpCfaxdhPT9UCSFoY+KEEluiC2Nt0ZbGpqXxud4iX2KBhxiWcAqNHC0wVejplPQUPP8yKG8txFKKAhGivOLQCiOdCtGzYC4Cfp5qn8xBvx+oPAgqhMlASahcaNpJCZ8fhyPRVDqRNxWggTWcHYtRwoZ8O1RwYbSUuGhp9Di/ZSlJ1xIatCNU0/zoymh7OyU2Sms1NR6TaMAHVdofDCg0r8AQLUvhQFiR5BAbCBYWGfJUoHjUKgtMQ9UcwpBnqYnnQ4IYjuYFFPFCjNqMNjuawA6aYjv+LH++ULeT0KEMpnCv4eQUJgkJnvxwbPaHZ2Nsa3IKw2EPoxV5eiKUZFmaSo1W5uuwUDoZFKF6MbYErzedTjNpjjHtHq8PANa7onVJTOmFSYkq2Dq9nkHa2BNoLR+KAslMpAk4axEsGVKnBIDRQ4khPsjxBdpHohJHS/8kKArZO7IZStUcfkmRVTWosiGWCwV4uRTNIRbq0+vggLKUpZOS3QexpUsKpBVSZqkktDVV4AIJH8cnIK0GwwnaH04kaDmgkvUSEAIIZVkJ8/+XHrnQKl+ga0QZJ1VWslIvSZk3mwhD9ULr/C9DiymmBdtNXVOy/21sTq+PFR9nq+2SjbPzU1kyjkFdJ79LClfJZ3J1CfeskiTyH/TLxcWtSfjyipj1h4JhHvg47tLiIneYyyouxUwyzvbL2JKFTZsh0CwdIsaGyEzZ5M7FtDlncdzsgwbZ3rBt6jq0O9lLYgE5TXx58eDMR8SBZGkMdK97zqGEcOM1JRK9I12dB+0ZYfc3Rl45lWV6UhBhAkSF9r9wsHtHvjDEsvzH9rveAP2uV8kjBYQAzc4GN1ZVLHdXjKeQhiHJraHKZobRpASDtB6DXKBtyPTBrCVpdnmVq/WLgZX3FL1ttq8CDcOvm3EVbE3RUwdMP6epZCdMrmWDLHBOMOeS0A2uPad1s5Pc9e9eP29L2Q+5awZvaX558/7Q4Y3Lf4WgdtjI5aosc/e7yg4d/ypTd6Drffciq/1mcWONcrC6WflS8PbsRdse7ziyY/1OdeqiE/2bDu+q/n3SpBXfbn2Jr1u2tv7TruMP7XknvLXpa9E3sNv2L04Pruv6vGPfbWfemxLYsVl58NiRuvrxj0x75tZTh6YMTJuwZiJ8vjrZAeLHVs04LX4mNvz0St2dW+Tewx/NeQt/XF/57MyG1p0vPHrD9MEfG9Jpfd7T30e6jvpmnzFPTDizvsaeeX8o49n085Prjy7uW3Mg8/q+175ZdW/mZO3Ezk/u2nVyD3fdVU91Pza5Kz7nTav8xTXHAxueuEN8+8M9D9y9d8fKGVdEB3p3/3Zw1tXfNeEP2hOHcttODQa9B+/b+PD+5tNDafwDhjxfo3UOAAA='
,    'debug' => false
,   'sandbox' => true
]);

$response = $service->search([
    'params' => [
        'filter' => 'price:[10..50]',
        'limit'  => '50',
        'offset' => '1',
        'q'      => 'Harry Potter',
        'sort'   => 'price'
    ]
]);

foreach ($response->itemSummaries as $itemSummary) {
    printf("Item Id [%s]\n", $itemSummary->itemId);
}
