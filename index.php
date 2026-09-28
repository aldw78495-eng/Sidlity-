<?php
require_once __DIR__."/config/bootstrap.php";$page_title="الرئيسية";
$countM=(int)$pdo->query("SELECT COUNT(*) FROM medicines")->fetchColumn();
$countP=(int)$pdo->query("SELECT COUNT(*) FROM pharmacies WHERE status='approved'")->fetchColumn();
$countH=(int)$pdo->query("SELECT COUNT(*) FROM hospitals")->fetchColumn();
$countR=(int)$pdo->query("SELECT COUNT(*) FROM rare_medicines")->fetchColumn();
require "includes/header.php";
?>
<section class="hero"><div class="container hero-grid">
<div>
<span class="eyebrow">منصة الأدوية والصيدليات في كسلا</span>
<h1>اعرف أين يوجد <span>دواؤك</span> قبل أن تتحرك</h1>
<p>ابحث باسم الدواء أو المادة الفعالة، شاهد الصيدليات التي أعلنت توفره، وتحقق من الموقع وآخر تحديث للمعلومة.</p>
<form class="search-box" action="medicines/index.php" method="get"><input name="q" required placeholder="مثال: Panadol أو Paracetamol"><button class="btn">بحث عن الدواء</button></form>
<div class="actions" style="margin-top:12px"><a class="btn blue" href="medicines/image-search.php">بحث باستخدام صورة</a><a class="btn light" href="pharmacies/index.php">استعراض الصيدليات</a></div>
</div>
<div class="hero-panel">
<h3 style="margin-top:0;color:var(--blue)">ماذا توفر صيدليتي؟</h3>
<div class="pill"><span class="pill-icon">⌕</span><div><b>بحث سريع</b><div class="small">اسم الدواء أو المادة الفعالة</div></div></div>
<div class="pill"><span class="pill-icon">⌖</span><div><b>الوصول للصيدلية</b><div class="small">العنوان والإحداثيات والخريطة</div></div></div>
<div class="pill"><span class="pill-icon">⟳</span><div><b>بيانات محدثة</b><div class="small">آخر وقت لتحديث حالة التوفر</div></div></div>
</div>
</div></section>
<section class="section" style="padding-top:0"><div class="container"><div class="stats">
<div class="stat"><strong><?=$countM?></strong>دواء مسجل</div><div class="stat"><strong><?=$countP?></strong>صيدلية معتمدة</div><div class="stat"><strong><?=$countR?></strong>دواء نادر</div><div class="stat"><strong><?=$countH?></strong>مرفق صحي</div>
</div></div></section>
<section class="section"><div class="container"><div class="section-head"><div><h2>طريقة الاستخدام</h2><p>من البحث إلى الصيدلية في خطوات واضحة</p></div></div>
<div class="cards">
<div class="card feature-card"><div class="feature-icon">01</div><h3>ابحث</h3><p class="meta">اكتب اسم الدواء أو المادة الفعالة، أو استخدم صورة العبوة لاستخراج النص.</p></div>
<div class="card feature-card"><div class="feature-icon">02</div><h3>تحقق</h3><p class="meta">قارن حالة التوفر والكمية وآخر تحديث بين الصيدليات المسجلة.</p></div>
<div class="card feature-card"><div class="feature-icon">03</div><h3>توجّه</h3><p class="meta">افتح موقع الصيدلية على الخريطة أو استخدم ميزة الصيدلية الأقرب.</p></div>
</div></div></section>
<section class="section"><div class="container"><div class="section-head"><div><h2>تنبيه مهم</h2><p>المنصة تعرض معلومات التوفر التي تدخلها الصيدليات، ولا تغني عن استشارة الطبيب أو الصيدلي.</p></div></div></div></section>
<?php require "includes/footer.php"; ?>