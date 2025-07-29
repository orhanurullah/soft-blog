<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Soft Blog
Soft Blog, yazılım ve kod üzerine kurulu, modern ve kullanıcı dostu bir blog platformudur. Yazılımcılar, yazılım meraklıları ve topluluk üyeleri için; makaleler, rehberler, kod örnekleri ve güncel yazılım haberlerinin paylaşıldığı zengin bir içerik platformu sunar. Laravel tabanlı bu uygulama, esnek altyapısı ve güçlü özellikleriyle öne çıkar.

#### Özellikler
Makale ve Blog Yönetimi:
Kullanıcılar kendi yazılarını oluşturabilir, kategorilere ayırabilir ve paylaşabilir. Markdown desteğiyle kod blokları ekleyebilirler.

#### Kod Vurgulama ve Paylaşımı:
Blog yazılarında farklı programlama dillerinde kod blokları eklenebilir ve sentaks vurgulama (syntax highlighting) ile okunabilirlik artırılır.

#### Kategori ve Etiket Sistemi:
Yazılar, kategorilere ve isteğe bağlı olarak birden fazla etikete atanabilir. Kullanıcılar ilgilendikleri konulara kolayca ulaşabilirler.

#### Yorum ve Geri Bildirim:
Her makale altında kullanıcılar yorum bırakabilir, sorular sorabilir ve tartışmalara katılabilir.

#### Kullanıcı Profilleri ve Takip:
Her kullanıcının profil sayfası bulunur. Kullanıcılar birbirini takip edebilir, favori yazarlarını ve içeriklerini izleyebilir.

#### Arama ve Filtreleme:
Anahtar kelime, kategori, etiket, yazar veya tarih aralığına göre içeriklerde arama ve filtreleme yapılabilir.

#### Popüler ve Önerilen İçerikler:
En çok okunan ve önerilen yazılar ana sayfada öne çıkarılır.

#### Bildirimler:
Yorumlara yanıt alındığında, yeni takipçi geldiğinde veya ilgilendiği kategoride yeni bir yazı yayınlandığında kullanıcıya otomatik bildirim iletilir.

#### Mobil Uyumluluk:
Responsive tasarımı sayesinde masaüstü ve mobil cihazlarda sorunsuz deneyim sunar.

#### Yönetici Paneli:
Kategoriler, kullanıcılar ve içerikler üzerinde detaylı yönetim ve moderasyon imkanı.

#### Çoklu Dil Desteği:
Türkçe başta olmak üzere çoklu dil desteği ile geniş kitlelere hitap eder.

#### Kurulum
Depoyu klonlayın:

#### bash
git clone https://github.com/orhanurullah/soft-blog.git
Gereksinimleri yükleyin:

#### bash
composer install
npm install && npm run dev
Ortam değişkenlerini ayarlayın:

#### bash
cp .env.example .env
php artisan key:generate
.env dosyasında veritabanı ayarlarınızı ve gerekli diğer yapılandırmaları tamamlayın.

#### Veritabanı migrasyonlarını çalıştırın:

#### bash
php artisan migrate
(İsteğe bağlı) Varsayılan içerikleri yüklemek için:

#### bash
php artisan db:seed
Uygulamayı başlatın:

#### bash
php artisan serve
Katkı ve Geliştirme
Katkıda bulunmak için lütfen depoyu fork’layın, yeni bir branch açın ve pull request gönderin. Her türlü öneri ve geri bildirim için issue oluşturabilirsiniz.

### Lisans
Bu proje MIT lisansı ile lisanslanmıştır.
