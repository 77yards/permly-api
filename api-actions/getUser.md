<H1>Get User</H1>

This action will allow you to retrieve all details of your user associated with API Key.

By using php-wrapper class, you can send request in this way:

Create an object of php wrapper class of perm.ly API

$server = new permly_api(); 

This will return all data of user associated with API Key

$result = $server->getUser();

<H2>Example</H2>

<I>Sending request</I>

$result = $server->getUser();

<I>Output</I>

<pre>
{ "account_details" : [  ],
  "accounts" : [ { "account_key" : "Permly Demo",
        "application" : "Perm.ly",
        "autoid" : "3059",
        "country" : "",
        "custom_logo" : "",
        "email" : "demo_account@gmail.com",
        "file_storage" : "",
        "fs_key" : "5b4amhmvpwzwwctc",
        "is_administrator" : true,
        "name" : "Demo User",
        "package" : "",
        "package_until" : "01/19/2038 03:14",
        "prim_uid" : "1416",
        "registration_date" : "11/02/2012 11:18",
        "special_price" : "0.00",
        "status" : "Trial",
        "street" : "",
        "system_usage" : "",
        "vat_id" : "",
        "zip" : ""
      } ],
  "data" : { "connected_sso_providers" : "",
      "date_format" : "dm",
      "email" : "demo_account@gmail.com",
      "firstname" : "Demo",
      "invalid_email" : "0",
      "last_login" : "1351855109",
      "name" : "User",
      "password_blank" : 0,
      "profile_image" : "0",
      "profile_image_url" : { "100" : "1415_profile_100.png",
          "30" : "1415_profile_30.png",
          "41" : "1415_profile_41.png"
        },
      "salutation" : "Mr.",
      "time_format" : "24h",
      "timezone" : "Europe/Berlin",
      "user_details" : [  ]
    },
  "sso_details" : [  ]
}
</pre>