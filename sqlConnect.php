<!-- Copyright 2016 James Jacob Kurian

Contact me at: jamesjacobtech@gmail.com

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License. -->

<?php
    $host = "127.0.0.1";
    $username = "root";
    $password = "root123";
    $conn = new mysqli($host, $username, $password);

    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>