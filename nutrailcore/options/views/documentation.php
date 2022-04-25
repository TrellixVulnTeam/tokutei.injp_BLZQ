<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access directly. ?>

<h2>1.使い始める前に</h2>
<p>NUTRAILは「テーマ(および子テーマ)・プラグイン」で構成されています。<br/>公式プラグイン「NUTRAIL
    CORE」が有効化されていないと全ての機能を使うことができませんので、必要に応じて「有効化」して下さい。このプラグインを有効化しないとAMPなどの機能が設定されません。</p>

<h2>2.サイトの設定</h2>
<p>
    「<a href="<?php echo site_url('/wp-admin/admin.php?page=admin_options'); ?>"><?php esc_html__('Site settings', 'nutrail') ?></a>」より共通設定などの各タブを選択して、それぞれ内容を設定してください。不要なinputは入力しなくて構いません。
</p>
<p>各タブは以下のようになっています。</p>

<h3>共通設定</h3>
<p>サイト共通の設定をします。ナビゲーションバーの設定やロゴの設定などはここで行います。</p>

<h3>法人・運営社情報</h3>
<p>会社概要に表示する内容やナビゲーションバーに表示するContact form電話番号、Contact formからのContact formを受信するメールなど、会社や運営社に関する情報はここに掲載されます。</p>

<h3>沿革</h3>
<p>会社やサイトの歴史などをここに記載していきます。ここに掲載した情報は固定ページ「History」というテンプレートを選択すると表示されます。</p>

<h3>トップページ</h3>
<p>サイトのトップページを設定することができます。</p>

<h3>LP1〜3</h3>
<p>サイトのトップページとはレイアウトは同様ですが、記載するコンテンツや表示するコンテンツを別に設定することができます。ABテストや独自のLPが設定したい場合はトップページとは別に3個までLPが設定可能です。</p>

<h3>Contact form</h3>
<p>トップページやLPにあるContact formはそれぞれ独自のものですが、固定ページででContact formページを作ることもできます。固定ページ「Contact
    form1〜3」というテンプレートを選択すると表示されます。</p>

<h2>3.固定ページの作成</h2>
<p>WordPressには記事とは別に、<a href="<?php echo site_url('/wp-admin/post-new.php?post_type=page'); ?>">固定ページ</a>が作成可能です。記事はブログや新着情報として記載していくコンテンツになりますが、固定ページは、会社概要やOfficerの挨拶、所在地の掲載、プライバシーポリシーなどを掲載するようなニュアンスの作成に使います。<br/>
    また、ページテンプレートなどを利用して、サイト設定で入力した情報をもとに、会社概要やContact form、LP、沿革などを表示させることも可能です。</p>

<h2>4.投稿の作成</h2>
<p>NUTRAILはコーポレートサイトに特化したWordPressテーマのため、必ずしも<a href="<?php echo site_url('/wp-admin/post-new.php'); ?>">投稿</a>が最初から必要とは限りません。しかし、ブログとしての利用だったり、新着情報として会社としての情報を発信する場合は投稿を利用します。<br/>投稿にはカテゴリがあり、「新着情報」「社長の独り言」「セール情報」など、投稿の種類を分類させることもできます。
</p>

<h2>5.表示確認</h2>
<p>各記事・固定ページはプレビューを、トップページは<a href="<?php echo site_url(); ?>">こちら</a>から確認いただけます。</p>