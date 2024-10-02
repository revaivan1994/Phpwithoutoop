<?php include_once 'templates/header.php' ?>

  <main role="main">



    <div class="album py-5 bg-light">
      <div class="container">
        <div class="mb-5">

          <a href="/?act=login">
            <button type="button" class="btn btn-primary">Login</button>
          </a>
          <a href="/?act=register">
            <button type="button" class="btn btn-secondary">Register</button>
          </a>
          <a href="">
            <button type="button" class="btn btn-success">Success</button>
          </a>


        </div>
        <div class="row">
        <?php while($row = $result->fetch_assoc()): ?>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="js/holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><?=htmlspecialchars( $row['title'])?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <a href="/?act=view&id=<?=$row['id']?>"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    <?php if($user && $row['userId'] == $user['id']): ?>
                      <a href="/?act=edit&id=<?=$row['id']?>"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                    <?php endif; ?> 
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile ?>
        </div>
      </div>
    </div>

  </main>

  <?php include_once 'templates/footer.php' ?>