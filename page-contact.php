<?php get_header(); ?>
    <div class="mainWrap headerMargin_other">
      <article class="contactMain">
        <h2>お問い合わせフォーム</h2>
        <form name="form1" method="post" action="">
          <dl>
            <dt><label for="name">お名前</label></dt>
            <dd><input type="text" name="name" id="name" required placeholder="山田太郎"></dd>
            <dt><label for="email">メールアドレス</label></dt>
            <dd><input type="text" name="email" id="email" required placeholder="mail@example.com"></dd>
            <dt><label for="comment">お問い合わせ内容</label></dt>
            <dd><textarea name="comment" id="comment" required></textarea></dd>
          </dl>
          <button type="submit">上記の内容で問い合わせる</button>
        </form>
      </article>
    </div>
    <?php get_footer(); ?>
