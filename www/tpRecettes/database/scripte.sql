CREATE DATABASE tpRecettes;

CREATE USER 'adminRecette'@'%' identified BY 'r3ceTTes';
GRANT ALL PRIVILEGES ON tpRecettes.* TO 'adminRecette'@'%';

--Lier la colonne user_id de la table recettes à la colonne id de la table users--

php artisan Schema::table('user_id', function (Blueprint $table) { $table->unsignedBigInteger('user_id'); $table->foreign('user_id')->references('id')->on('users'); }); 
Schema::table("recettes", function (Blueprint $table) { $table->string("user_id"); });