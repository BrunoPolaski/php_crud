# PHP CRUD

# Init project

To create a Docker container with MySQL using port 3307, along with a database named "crud" and a table named "tb_users", you can follow these steps:

1. Create a new file named `docker-compose.yml` in the directory.

2. Open the `docker-compose.yml` file and add the following content:

```yaml
version: '3'
services:
    db:
        image: mysql:latest
        ports:
            - 3307:3306
        environment:
            MYSQL_ROOT_PASSWORD: your_password
            MYSQL_DATABASE: crud
        volumes:
            - ./data:/var/lib/mysql
        command: --default-authentication-plugin=mysql_native_password
```

3. Save the `docker-compose.yml` file.

4. Open a terminal or command prompt and navigate to the `/c:/Users/polas/php_crud/` directory.

5. Run the following command to start the Docker container:

```bash
docker-compose up -d
```

6. Wait for the container to start. You can check the container logs using the following command:

```bash
docker-compose logs -f
```

7. Once the container is up and running, you can connect to the MySQL database using the following credentials:

- Host: `localhost`
- Port: `3307`
- Username: `root`
- Password: `your_password`
- Database: `crud`

You can now create the `tb_users` table and perform CRUD operations on it.
