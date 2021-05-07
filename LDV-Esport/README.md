# LDV Esport Tournament

![image](https://user-images.githubusercontent.com/37938250/111011925-5c801700-839b-11eb-99eb-dd1c9360e9dc.png)

This project is an esport plateform for LDV Esport, the student esports section of the [Pôle Léonard de Vinci](https://www.devinci.fr/en/) in Paris.

## Getting Started
### Prerequisites

To install the project, you need :
- Composer
- npm
- PHP
- Laragon

### Installation

__Step 1 :__ go in your `php.ini` file and check if the extensions below are activated :
- curl
- fileinfo
- gd2
- intl
- mbstring
- mysqli
- openssl
- pdo_mysql

__Step 2 :__ clone the repository and open it in your command prompt.

__Step 3 :__ check if you have composer 2 with `composer --version`.
If not, execute `composer self-update --2`.

__Step 4 :__ execute : `composer install`

__Step 5 :__ execute :
* `npm install`
* `npm run dev`

__Step 6 :__ in the project folder, create a folder **"storage"** in `public/`.

__Step 7 :__ execute in your command prompt `php artisan storage:link`.

__Step 8 :__ now, go in **phpmyadmin** with Laragon and create an empty database.

__Step 9 :__ Create at the root of the project a `.env` file. Copy `.env.example` content and paste it in your new file. In the `.env` file, modify the section concerning the database with your information.

__Step 10 :__ In your command prompt, execute `php artisan migrate`.

### Launch

To launch the project, execute `php artisan serve`.
Once it's done, go to the given url (http://xxx.xxxx.xxx.xx:xxxx).

## Realization
### Built with

- Laravel v8
- PHP v8.0.3
- Tailwind v2
- HTML 5
- Visual Studio Code

### Authors

- Malo Braunschweig
- Claire Brisbart
- Julien Cousin-Alliot
- Nicolas de Garrigues
- Tom Louveau
- Thibault Sulem

We are all second year students at [IIM Digital School](https://www.iim.fr) in Paris-La Défense. 
