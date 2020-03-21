<!DOCTYPE html>
    <html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-13xxxxxxxxx"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-13xxxxxxxxx');
        </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>予約管理</title>

        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- css -->
        <link rel="stylesheet" href="./styles.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="header-logo">
                    <h1><a href="dashboard.php">管理画面</a></h1>
                </div>

                <nav class="menu-right menu">
                    <a href="logout.php">ログアウト</a>
                </nav>
            </div>
        </header>
        <main>
            <div class="wrapper">
                <div class="container">
                    <div class="wrapper-title">
                       <h3>予約管理</h3>
                    </div>
                    <div class="list">
                        <table>
                            <thead>
                                <tr>
                                    <th>id</th>
-                                       <th>タイトル</th>
-                                       <th>本文</th>
+                                       <th>予約日時</th>
+                                       <th>予約者名</th>
+                                       <th>電話番号</th>
+                                       <th>メールアドレス</th>
+                                       <th>予約人数</th>
                                    <th>更新日時</th>
                                    <th>作成日時</th>
-                                      <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
-                                   <?php foreach($news as $new): ?>
+                                   <?php foreach($reservations as $reservation): ?>
                                <tr>
-                                      <td><?php echo $new['id']; ?></td>
-                                      <td><?php echo $new['title']; ?></td>
-                                      <td><?php echo $new['content']; ?></td>
-                                      <td><?php echo $new['created_at']; ?></td>
-                                      <td><?php echo $new['updated_at']; ?></td>
+                                      <td><?php echo $reservation['id']; ?></td>
+                                      <td><?php echo $reservation['reserve_date']; ?></td>
+                                      <td><?php echo $reservation['name']; ?></td>
+                                      <td><?php echo $reservation['tel']; ?></td>
+                                      <td><?php echo $reservation['email']; ?></td>
+                                      <td><?php echo $reservation['number']; ?></td>
+                                      <td><?php echo $reservation['updated_at']; ?></td>
+                                      <td><?php echo $reservation['created_at']; ?></td>
-                                      <td>
-                                          <button class="btn btn-green" onclick="location.href='edit_news.php?id=<?php echo $new['id']; ?>'">編集</button>
-                                          <button class="btn btn-red delete" data-id=<?php echo $new['id']; ?>>削除</button>
-                                          <form method="POST" action="./delete_news.php" id="delete_form_<?php echo $new['id']; ?>">
-                                              <input type="hidden" value="<?php echo $new['id']; ?>" name="id">
-                                          </form>
-                                      </td>

                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <div class="container">
                    <p>Copyright @ 2018 SQUARE, inc</p>
                </div>
            </footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        </body>
    </html>