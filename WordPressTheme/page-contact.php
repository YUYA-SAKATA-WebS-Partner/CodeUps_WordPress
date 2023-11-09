<?php get_header(); ?>
<!-- breadcrumbs -->
<div class="breadcrumbs inner">TOP > お問い合わせ</div>

<!-- content -->
<div class="page-contact sub-page-contact-layout">
  <div class="page-contact__inner inner">
    <div class="page-contact__error">
      <p class="page-contact__error-text"></p>
    </div>
    <form action="#" method="post" id="js-form" class="page-contact__form form">
      <dl class="form__item">
        <dt>
          <label for="name">お名前</label>
        </dt>
        <dd>
          <input type="text" id="name" name="name" placeholder="沖縄　太郎" required />
        </dd>
      </dl>
      <dl class="form__item">
        <dt>
          <label for="email">メールアドレス</label>
        </dt>
        <dd>
          <input type="email" id="email" name="mail_address" placeholder="aaa000@ggmail.com" required />
        </dd>
      </dl>
      <dl class="form__item">
        <dt>
          <label for="tel">電話番号</label>
        </dt>
        <dd>
          <input type="tel" id="tel" name="tel" placeholder="000-0000-0000" required />
        </dd>
      </dl>
      <dl class="form__item">
        <dt class="">
          お問い合わせ項目
        </dt>
        <dd class="form__check">
          <label><input type="checkbox" name="inquiry" value="ダイビング講習について" checked /><span>ダイビング講習について</span></label>
          <label><input type="checkbox" name="inquiry" value="ファンデイビングについて" /><span>ファンデイビングについて</span></label>
          <label><input type="checkbox" name="inquiry" value="体験ダイビングについて" /><span>体験ダイビングについて</span></label>
        </dd>
      </dl>
      <dl class="form__item form__item--optional">
        <dt class="form__campaign">
          キャンペーン
        </dt>
        <dd class="form__select">
          <select name="campaign" class="" size="1">
            <option value="" selected>キャンペーン内容を選択</option>
            <option value="licence">ライセンス取得</option>
            <option value="reserved">貸切体験ダイビング</option>
            <option value="reserved">ナイトダイビング</option>
            <option value="reserved">貸切ファンダイビング</option>
          </select>
        </dd>
      </dl>
      <dl class="form__item">
        <dt>
          <label for="contents">お問い合わせ内容</label>
        </dt>
        <dd>
          <textarea id="contents" name="contents" required></textarea>
        </dd>
      </dl>
      <div class="form__consent">
        <label><input type="checkbox" name="consent" value="同意する"
            required /><span>個人情報の取り扱いについて同意のうえ送信します。</span></label>
      </div>
      <div class="form__button">
        <button class="button button--form" type="submit"><span>Send</span></button>
      </div>
    </form>
  </div>
</div>
<?php get_footer(); ?>