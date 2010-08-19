<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
      <div id="wrap">
      <div id="container">
          <div id="title">
              WebScada
          </div>
          <div id="menu">
              <table>
                  <tr>
                      <td><a href="/"><img src="/images/icons/home.gif" alt="Home" title="Home" /></a></td>
                      <td><a href="/network"><img src="/images/icons/network.gif" alt="Network" title="Network" /></a></td>
                      <td><a href="/objects"><img src="/images/icons/objects.gif" alt="Objects" title="Objects" /></a></td>
                      <td><a href="/counters"><img src="/images/icons/counters.gif" alt="Counters" title="Counters" /></a></td>
                      <td><a href="/users"><img src="/images/icons/user.gif" alt="Users" title="Users" /></a></td>
                      <td><a href="/usersPermissions"><img src="/images/icons/perm.gif" alt="Permissions" title="Permisssions" /></a></td>
                  </tr>
              </table>
          </div>
      </div>
      <div id="content">
        <?php echo $sf_content ?>
      </div>
      <div id="footer">
        &copy; 2010 Yankovskiy Artem
      </div>
      </div>
  </body>
</html>
