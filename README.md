# Start Project
Run command: `make build`

The container FPM is running on port 8002

The container Franken is running on port 8004

# K6
Download image K6 with
`docker pull grafana/k6:master-with-browser`

then run command
`docker run --add-host=host.docker.internal:host-gateway -i loadimpact/k6 run - <file.js`

when `file.js` is file that inside folder `tests\k6`

# Routes
Has 4 routes for this projecs:
* `/users` - list all users (are 10 users)
* `/users/count` - counted users (are 10 users)
* `/posts` - list all posts (are 30000 posts)
* `/posts/count` - counted posts (are 30000 posts)
