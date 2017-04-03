# Simple WAMP Websocket Router

This router is based on voryx/thruway and is implementing the "Web Application Messaging Protocol" WAMP (see http://wamp-proto.org/).

## Installation
We created a executable phar archive that can be downloaded and used without further ado.

```
wget http://pharchive.phmlabs.com/archive/phmLabs/WampRouter/current/wamprouter.phar
chmod +x wamprouter.phar
./wamprouter.phar
```


## Usage
```
// run on 127.0.0.1:9090
./wamprouter.phar start 

// run on 127.0.0.1:9090 with more information
./wamprouter.phar start -v

// run on 127.0.0.1:8090
./wamprouter.phar start -H 127.0.0.1 -p 8090
```

## Credits
This router is based on voryx/Thruway a great library to handle all kind of websocket stuff (https://github.com/voryx/Thruway).


