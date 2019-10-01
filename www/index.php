<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LAMP STACK</title>
    </head>
    <body>
        <section>
            <div>
                <h1 class="title">
                    LAMP STACK
                </h1>
                <h2>
                    Your local development environment
                </h2>
            </div>
        </section>
        <section>
            <div>
                <h3>Environment</h3>
                <hr>
                <div>
                    <ul>
                        <li><?php echo apache_get_version(); ?></li>
                        <li>PHP <?php echo phpversion(); ?></li>
                        <li>
                            Modules:
                            <ul>
                            <?php foreach (get_loaded_extensions() as $module) { ?>
                                <li>
                                    <?php echo $module; ?>
                                </li>
                            <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <h3>Quick Links</h3>
                <hr>
                <div>
                    <ul>
                        <li><a href="/phpinfo.php">phpinfo()</a></li>
                        <li><a href="/test_db.php">test db</a></li>
                        <li><a href="http://localhost:9000">phpMyAdmin</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </body>
</html>
