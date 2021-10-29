# Online courses shop

Shop with online courses developing in awesome (xd) Prestashop framework.
## Installation

Use docker to run the container:

```bash
docker-compose up
```

To shut down container use:

```bash
docker-compose down
```

## Accessing admin page
To go to admin page visit `http://localhost:8080/admin1` and fill:
```
email: admin@admin.com
password: 12345678
```

## File structure
Prestashop source and configuration files inside the container are replaced by those in `src/` folder.

At start, db dump from `db/` folder is applied to MySQL container.  

## Changing db dump
If there are any changes applied to db you should contain a proper SQL dump in your PR. In order to get dump from container run:

```bash
docker exec be-project_ps1_db_1 /usr/bin/mysqldump -u root --password=admin ps > /tmp/dump.sql
```


## Contributing
Please open a pull request to contribute any changes. Do not commit to main! 

## License
[MIT](https://choosealicense.com/licenses/mit/)
