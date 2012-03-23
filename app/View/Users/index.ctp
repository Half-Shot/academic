<?php $this->layout = 'academic'; ?>

<div class="centered">
<h1 style="margin-bottom: 20px;">IMPORTANT</h1>
<p>After creating your admin account, go to <code>/app/Controller/UsersControler</code> and replace line 19 <br>
<code>$this->Auth->allow('add','login', 'logout');</code><br>
 by
 <code>$this->Auth->allow('login', 'logout');</code><br>
 </p>
</div>