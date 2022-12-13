## Installation

```sh
git clone git@github.com:naomigrain/simple-park-web.git
cd simple-park-web
cp .env.example .env # then fill the env
php artisan key:generate
composer install
php artisan migrate
php artisan db:seed
```

## Api
### GET /api/available-slot 
```
    {
        selected_slot: <int>
    }
```

### POST /api/check-in/{id_slot}
```
    {
        error: true/false
    }
```

### POST /api/check-out/{id_slot}
```
    {
        error: true/false
    }
```

### POST /api/turn-on/{id_light}
```
    {
        error: true/false
    }
```

### POST /api/turn-off/{id_light}
```
    {
        error: true/false
    }
```