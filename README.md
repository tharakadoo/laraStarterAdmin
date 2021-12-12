
# laraStarterAdmin

Laravel 8 Admin Starter Kit with CoreUi. 
laraStarterAdmin built to cut initial creation time of a laravel project.
 

 


## Features

- Authentication (Login, Register, Password Reset)
- Authorization - Create Role, Assign Users to Roles, Add permissions to Roles.
- Simple CRUD with Ajax Datatables


## Installation

- Clone the repo 

```bash
  git clone https://github.com/tharakadoo/laraStarterAdmin.git
```
- Install Composer packages

```bash
  composer install
```

- Update your .env file to reflect your database settings and the serving method of choice.

- Migrate database

```bash
  php artisan migrate
```

- Seed Permissions and Admin User

```bash
  php artisan db:seed --class=PermissionTableSeeder
  php artisan db:seed --class=CreateAdminUserSeeder
```
- Run the app
```bash
  php artisan serve
```
- Access By

```bash
  http://localhost:8000
```
- User Credentials

```bash
  Email: admin@gmail.com
  Password: 123456
```


## Related

Following libraries, Packages are used in this app.

- [LaravelDaily/Larastarters](https://github.com/LaravelDaily/Larastarters)
- [CoreUi](https://coreui.io/) 
- [Select2](https://github.com/select2/select2) 
- [Laravel DataTable](https://datatables.yajrabox.com) 

## More

Want more functions? Raise an issue with your suggestion
## Authors

- [@tharakadoo](https://www.github.com/tharakadoo) - tharakadoo@gmail.com - [tharakakasun.com](http://www.tharakakasun.com)  


## Contributing

Contributions are always welcome!

See `contributing.md` for ways to get started.

Please adhere to this project's `code of conduct`.


## Support

Give a ⭐️ if this project helped you!


## Screenshots

![App Screenshot](https://github.com/tharakadoo/laraStarterAdmin/blob/main/screen_shots/lara%20admin%201.PNG)

![App Screenshot](https://github.com/tharakadoo/laraStarterAdmin/blob/main/screen_shots/lara%20admin%202.PNG)

![App Screenshot](https://github.com/tharakadoo/laraStarterAdmin/blob/main/screen_shots/lara%20admin%203.PNG)

![App Screenshot](https://github.com/tharakadoo/laraStarterAdmin/blob/main/screen_shots/lara%20admin%204.PNG)

![App Screenshot](https://github.com/tharakadoo/laraStarterAdmin/blob/main/screen_shots/lara%20admin%205.PNG)

![App Screenshot](https://github.com/tharakadoo/laraStarterAdmin/blob/main/screen_shots/lara%20admin%206.PNG)



## License

This project is licensed under  [MIT](https://choosealicense.com/licenses/mit/)



