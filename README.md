# restauranttheme
A simple OctoberCMS theme for simple websites.

### Installing October

Instructions on how to install October can be found at the [installation guide](http://octobercms.com/docs/setup/installation).

### Quick start installation

For advanced users, run this in your terminal to install October from command line:

```shell
php -r "eval('?>'.file_get_contents('https://octobercms.com/api/installer'));"
```

If you plan on using a database, run this command:

```shell
php artisan october:install
```

### Important Bugfix Notes

If you're running into a "network is unreachable" error that looks like it's IPv6 related, check if your hosting service supports IPv6. If it doesn't, force cURL to use IPv4 by going into ```Vendor/october/rain/src/Network/Http.php```, finding the ```send()``` function, and addding the following configuration setting: 
```
// FIX IPv6 ERRORS BY FORCING IPv4 REQUESTS
if (defined('CURLOPT_IPRESOLVE') && defined('CURL_IPRESOLVE_V4')){
  curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
}
```
