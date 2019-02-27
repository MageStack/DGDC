<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'flatsome');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '1');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j4WIb*RUQ9$px-XKh{hK4}/$M5nZ.TG>Jotn?E@ghyHlt=R]s&{wj!9_US@t_KHu');
define('SECURE_AUTH_KEY',  'p*4xw9`)kw>*(|ku]o*.LU|2p>(IAE*Q*p{sjgfR[^k,,bz^kzA-if$sw{pbV_z0');
define('LOGGED_IN_KEY',    '>CY+YR;RdP_2E`QRk;UAK4uQhF3>I9WZj8 @EE[#{c]LCb/@wDO7 /:*k.}D{LX+');
define('NONCE_KEY',        'qAD6$#@qUi#^{nE0rCN.i-1vn`icf4=z_Dm+1X@[VgH.-3U=r;@KhL:7leLI*)[P');
define('AUTH_SALT',        '3~&xkm7j2]<pw$Nc$s}oE.tO$iwd>_9t3HpfB>%%Ui}V9;=t4[m9Ymda(OoEPu>r');
define('SECURE_AUTH_SALT', 'U/_K`Twm^qMfF?QaAwL@1:5XeP zkepLp|>?grRTsq9`AK-$Mxz~f1~>oeGTF)g^');
define('LOGGED_IN_SALT',   'e7)/[}-[oS?67:i24HY[>q6:Gbkv8~Zy zPO)O&1ff?/0c hCh}KDcq53/pfy!`^');
define('NONCE_SALT',       ';[,Fhz,H^V9L(sY}CiW8SfCwC&:lfs6`bt5n=D;<?:P{k6.s`U[3awr$WAcc#RNH');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
