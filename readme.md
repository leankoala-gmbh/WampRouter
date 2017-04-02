# Simple WAMP Websocket Router

This router is based on voryx/thruway and is implementing the "Web Application Messaging Protocol" WAMP (see http://wamp-proto.org/).

## Usage
```
// run on 127.0.0.1:9090
php bin/router.php start 

// run on 127.0.0.1:9090 with more information
php bin/router.php start -v

// run on 127.0.0.1:8090
php bin/router.php start -H 127.0.0.1 -p 8090
```

## Credits
This router is based on voryx/Thruway a great library to handle all kind of websocket stuff (https://github.com/voryx/Thruway).


