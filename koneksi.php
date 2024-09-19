<?php
          $host ="localhost";
          $username ="root";
          $paswword ="";
          $database ="undangan";
          $koneksi = new mysqli($host,$username,$paswword,$database);

          if ($koneksi->connect_error) {
            echo "koneksi gagal wkwk :( \n";
          }

          ?>