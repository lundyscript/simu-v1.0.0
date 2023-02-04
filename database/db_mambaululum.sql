-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2023 at 06:29 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mambaululum`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kutipan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isiartikel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `user_id`, `kategori_id`, `status_id`, `judul`, `slug`, `kutipan`, `isiartikel`, `image`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Ini judul berita yang akan di publish ke laman frontend', 'ini-judul-berita-yang-akan-di-publish-ke-laman-frontend', 'In cupiditate eius et labore aliquid. Quia aut et iure quibusdam et. Exercitationem facere ut quae expedita culpa nam voluptas.Dolores et necessitatibus nostrum quos dolorem sapiente nostrum. Voluptat...', '<div><br>In cupiditate eius et labore aliquid. Quia aut et iure quibusdam et. Exercitationem facere ut quae expedita culpa nam voluptas.<br><br></div><div><br>Dolores et necessitatibus nostrum quos dolorem sapiente nostrum. Voluptatem est sit aliquam rem cupiditate quisquam ipsa. Aspernatur maiores nemo animi quo non eos.<br><br></div><div><br>Sint error rerum sit est vitae labore ut et. Tenetur est voluptas occaecati saepe nihil perferendis facere.<br><br></div><div><br>Eos sequi qui aut eum excepturi numquam recusandae. Reprehenderit maxime quia perferendis.<br><br></div><div><br>Neque et qui dolorem veritatis dolores autem. Sit amet deleniti tempore consequatur aut quis. Repellat quas saepe et necessitatibus. Dicta consequuntur dolores perspiciatis doloribus temporibus.<br><br></div><div><br>Autem dolores et veritatis omnis doloribus maxime. Rerum ratione dignissimos aliquid voluptas. Animi laboriosam unde sint quis provident eos quod vel. Minus saepe sequi numquam.<br><br></div><div><br>Est ut voluptas eius possimus. Dolores inventore cupiditate illum perspiciatis ea rerum. Est et atque minima debitis non enim fugit.<br><br></div>', 'post-images/JXUZGP4ubOvUBGQoeZ8pjhp7e8YM7N0W1NbjAghL.jpg', '2023-01-12 17:22:41', '2023-01-12 09:44:39', '2023-01-12 10:22:41'),
(2, 1, 2, 2, 'Et ut non qui reprehenderit non error cupiditate aut aut officia.', 'in-sint-quis-temporibus-beatae', 'Placeat omnis quod velit necessitatibus architecto qui consequatur. Accusantium alias et occaecati praesentium consequatur in. Et non dolorum voluptatum qui temporibus nulla laudantium.', '<p>Praesentium velit illum voluptatem tempore. Qui maxime ipsa dolorem consectetur nobis voluptatem esse. Adipisci est et quo vel corporis cupiditate harum.</p><p>Sed autem quidem consequuntur vel et accusantium provident sunt. Et vel voluptates sit voluptatem aut inventore sequi. Et omnis sed praesentium sapiente consequuntur quia. Deleniti voluptatibus accusamus illum est at architecto.</p><p>Mollitia est molestias est ratione aspernatur ut aut exercitationem. Quod ipsum quasi magnam eum. Mollitia consequatur quos sed numquam. Maiores adipisci laborum omnis reiciendis excepturi.</p><p>Exercitationem possimus deserunt et ullam delectus. Eos in doloremque aut eaque animi. Id modi labore et.</p><p>Quibusdam tempore perspiciatis soluta quia aut. Quis sit accusantium et perspiciatis. Accusamus aut aperiam omnis et unde ut.</p><p>Recusandae quia et recusandae necessitatibus beatae error. Quos maxime ratione et explicabo. Exercitationem laborum suscipit tempora molestias unde ea. Nihil enim impedit enim repellendus officiis sed saepe.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(3, 3, 2, 1, 'Sit qui atque qui quia eos accusamus id aut ad.', 'quis-sint-accusantium-eum-eum-quod-cupiditate-enim', 'Itaque mollitia itaque dolore adipisci aut. Eaque voluptas consequatur sint quod adipisci.', '<p>Omnis quo maiores quasi et accusantium sed. Voluptatem delectus tempora autem nemo earum. Hic hic laborum ea. Quis laborum in possimus culpa.</p><p>Quas odit vitae earum et fugiat reprehenderit voluptatem. Quam quis dolor et reprehenderit impedit quia voluptas. Expedita maiores vel autem natus recusandae deserunt quia. Molestias quos eligendi id aspernatur magni quidem neque. Odio numquam optio omnis ad voluptatem nostrum incidunt reprehenderit.</p><p>Accusamus praesentium ex voluptatem maiores corporis. Id sapiente dolor non numquam eveniet laborum. Quaerat minima facere iste cupiditate deleniti consequatur non dolorem.</p><p>Qui eum placeat eum nesciunt exercitationem. Ab velit rerum dolorem ducimus quo. Reiciendis qui nobis qui iusto qui. Cum iusto porro magni reprehenderit aut.</p><p>Aliquam ut quod sint est corrupti debitis iusto repudiandae. Rerum qui nihil qui iusto ipsa vitae error. Nemo sed minus veritatis.</p><p>Quod voluptate nihil repellendus non ipsa fugit ut. Quidem aspernatur tempora facilis voluptates dolor eos commodi. Ad qui laborum est.</p><p>Veritatis voluptate sapiente quia possimus deserunt ex nam. Sed labore fugiat magnam vel voluptate. Quia blanditiis suscipit consectetur tempore. Molestias culpa id debitis iure non accusamus ratione.</p><p>Qui non vitae tenetur magni id adipisci. Qui in placeat corporis dolor placeat.</p><p>Fugiat facere quis harum est pariatur. Ea molestiae ex maxime alias quibusdam. Eius culpa tempora dolor corporis laborum id tenetur dolorum. Aut voluptatem accusantium et sed eum velit velit.</p><p>Vero dolorem magni commodi non fugit est voluptatem velit. Qui ea non optio asperiores. Repudiandae accusantium iure ducimus voluptas. Ullam ut fuga nesciunt nemo repellendus qui.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(4, 3, 2, 2, 'Et id omnis ad et facilis exercitationem doloremque ad tempora.', 'eos-ipsa-sit-consequuntur-et-debitis', 'Perspiciatis ipsam id iure error ut voluptates tempora. Temporibus voluptas alias eos eum. Nostrum repellendus exercitationem magnam.', '<p>Quis est aspernatur laboriosam natus similique in. Aut similique officiis natus et. Deserunt nisi et doloremque iste sunt inventore tenetur totam.</p><p>Dignissimos quisquam laborum quis quis iure quaerat dignissimos. Quod facere totam fugiat recusandae dolorum est autem. Soluta pariatur minus blanditiis quis ut laudantium qui. Qui ut autem optio sit. Repudiandae odio eos sit adipisci aliquam consequatur sit quo.</p><p>Exercitationem provident eos magni non facilis qui. Consequatur consectetur error id repudiandae officiis ut. Optio aut tenetur est officia dolorem ipsam modi at. Aspernatur laboriosam doloribus nihil dolore ad earum.</p><p>Eum earum ut provident sunt minus. Quidem voluptatem quae quis aut. Voluptatem iure accusamus esse. In ducimus provident facilis tenetur beatae molestias. Delectus cum reiciendis deserunt eaque incidunt temporibus molestiae.</p><p>Sit est dolores quo excepturi illo autem. Assumenda dolor harum architecto minima facere nisi enim repellat. Magnam molestiae eos eius quis iste. Similique et quia expedita.</p><p>Tempora in mollitia quo sed ipsam. Tempora qui dolorem recusandae ea. Est ea ea nulla.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(5, 3, 1, 1, 'Dolorem accusamus praesentium quis illum debitis iste tenetur.', 'ex-quia-excepturi-ut-consequatur-facere-voluptatem', 'Beatae ex commodi neque molestiae doloremque. Perferendis expedita consequatur est magni architecto voluptatem dolorem. Repudiandae delectus dolore est soluta hic ipsam sint est.', '<p>Laudantium qui neque qui. Commodi quasi saepe labore quod porro. Delectus voluptatem optio magni qui consectetur. Voluptate dignissimos temporibus vel iste animi doloribus quae.</p><p>Voluptate id tempore est aperiam dolor. Nobis et recusandae sed doloribus reiciendis. Velit et deserunt impedit vero laborum inventore a. Et fugit sed laudantium ducimus repudiandae.</p><p>Architecto dolores ut voluptas vel delectus eum. Incidunt voluptatem vitae distinctio rerum expedita. Explicabo id illo dolorem consequatur.</p><p>Odio est reiciendis facere qui officia. Sed esse deleniti odit odio voluptatum. Numquam nesciunt praesentium accusamus laudantium. Et eius eum in et laborum necessitatibus.</p><p>At officia itaque tempore repudiandae placeat nihil ut. Consequuntur officiis deleniti qui et nulla accusamus recusandae. Et ut non blanditiis sed labore et autem.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(6, 3, 1, 1, 'In voluptatum quo qui id delectus nobis quia eum dolorem libero earum debitis.', 'occaecati-vitae-non-est-ex-amet-quia', 'Rerum totam ex ea omnis. Est explicabo dolorum consequatur velit. Sit sunt voluptatem quo sapiente recusandae dolor odio.', '<p>Velit repellendus quibusdam numquam est et quis distinctio. Assumenda voluptates et sit earum et debitis distinctio. Unde rerum officiis ullam sed distinctio placeat a.</p><p>Ex eligendi dolor suscipit a quaerat. Commodi nemo eum libero aliquam maiores sed. Rerum consequatur voluptatem deserunt natus doloremque et. Minima nulla laboriosam ducimus et.</p><p>Sapiente architecto voluptate ex consequatur explicabo officia. Quas earum magnam in dolorum.</p><p>Dolores fugiat in optio occaecati sequi. Ipsa velit consequatur nam error delectus. Neque est dolor sit beatae totam. Enim cupiditate aliquid qui aliquid nesciunt.</p><p>Inventore sequi accusamus eos harum eos. Dignissimos doloribus voluptatem voluptatibus mollitia in. Ullam exercitationem ullam dolor magnam eveniet perspiciatis dolores. Animi neque ipsa facilis blanditiis possimus dicta pariatur.</p><p>Totam ipsam corporis aliquid veritatis sit. Tempore ut qui quam at. Id in omnis tempora sed. Voluptatem atque provident explicabo aut illo.</p><p>Voluptas voluptas cumque aut quod et quas et. Sit aut aut repellat ut. Cupiditate aut eos repellat molestiae.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(7, 3, 2, 2, 'Animi eaque et odit ut ut atque recusandae iste dicta unde quam numquam.', 'eos-et-quo-quia-quae', 'Veritatis vel accusamus nemo sunt natus voluptatum est. Cumque esse sit molestias itaque.', '<p>Eum rerum voluptates quia. Aut temporibus aut vel praesentium qui. Velit aut eligendi expedita accusamus.</p><p>Enim doloremque vel quis maiores expedita sed. Ut necessitatibus animi perferendis nihil quasi ad. Ut quis eligendi sint est nesciunt eveniet.</p><p>Repudiandae doloremque sit et quia quia tempore. Ut repudiandae sit omnis nesciunt minus repellendus earum nesciunt. Quae qui corporis ut neque repudiandae reprehenderit.</p><p>Cum laudantium sunt quo et. Incidunt inventore ut dicta odit eum vero. Dolorum dicta consequatur eum cupiditate nam maxime sunt accusamus. Officiis et incidunt sint ab sit officiis.</p><p>Officia porro illum impedit. Itaque adipisci facere quisquam dignissimos tempora et et voluptas.</p><p>Commodi odit inventore quasi ad non cumque nisi. Velit autem inventore quasi et. Aut distinctio est quia et corrupti laborum.</p><p>Voluptatem sit aut eum eos est. Perferendis illum eveniet et animi tempore molestiae. Ut ad non quia eum rerum. Quas consequatur error saepe animi repudiandae et.</p><p>Dignissimos sit ullam consectetur laborum. Beatae odit praesentium sint eligendi. Eum dolorem ab quas voluptate aut. Incidunt dolores reiciendis optio asperiores maiores atque.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(8, 1, 1, 1, 'Ab voluptas id atque sequi voluptatem cum cupiditate aliquam ipsa delectus quia ab beatae.', 'aliquam-in-enim-consequatur-mollitia-voluptatem-itaque', 'Ut placeat explicabo delectus repellendus. Laboriosam incidunt ut itaque commodi. Quis eum nihil rerum quisquam magni quibusdam expedita voluptatem. Fugit veritatis quaerat labore atque sit.', '<p>Impedit nam accusantium mollitia numquam debitis neque consequatur. Vitae accusamus ut magni quibusdam sed sed. Ut unde qui deserunt debitis quod.</p><p>Laborum a voluptatem laboriosam consequuntur veniam id et. Aut perspiciatis quas illum aut laborum non porro. Voluptatem voluptas iure commodi reprehenderit possimus quaerat.</p><p>Sequi neque qui sint. Sed quae accusantium deleniti quia impedit illo dolores odit. Error aut dolor adipisci.</p><p>Ea vel repudiandae aut omnis et voluptatem. Id quaerat architecto doloremque illo. Illum consectetur commodi quibusdam sit fugit cum. Blanditiis repellendus maxime et enim.</p><p>Sunt accusantium eos non nihil et molestias enim. In expedita qui sunt reprehenderit. Enim eius quia sit quos.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(9, 3, 1, 1, 'Et deserunt et laborum non aut ipsum.', 'non-nulla-animi-explicabo-laboriosam-voluptatum-iste-sed-id', 'Doloribus facere ut pariatur omnis. Aperiam temporibus magnam sint eos reprehenderit sit omnis. Omnis veniam ipsum laboriosam. Ut voluptatem omnis laborum alias in est.', '<p>Aliquid tenetur voluptates quo. Sint est ut perferendis aut voluptas quisquam molestiae doloribus. Dolorem quasi culpa quis a molestiae tempora. Enim exercitationem rerum autem repellendus quod.</p><p>Aut non ea et consequatur praesentium ut. Dolorem quo minima neque. Excepturi ut vel similique ratione vero eveniet. Facilis nihil saepe dolor tempora.</p><p>Quia qui consectetur tenetur deleniti. Dolorem et corrupti quo eos exercitationem nostrum dolores. Voluptates voluptatibus et commodi nulla laboriosam rem voluptatem.</p><p>Nulla culpa harum fuga libero ut minus ullam. Officiis exercitationem repudiandae ut modi nisi et. Nisi voluptatem deserunt et nostrum et. Eum ex delectus sed nesciunt.</p><p>Quis quae aspernatur qui expedita eos vitae est. Consequuntur occaecati expedita ratione alias non labore autem. Enim provident sed atque qui assumenda sunt dolorum.</p><p>Reiciendis impedit quo blanditiis. Quos ad ipsam aut. Est ad quas eos laborum corporis. Quia voluptas dolor enim nulla occaecati deserunt quos nam.</p><p>Sed magnam voluptate sit dolore incidunt ratione sit quibusdam. Sunt excepturi architecto dolorum veritatis voluptas. Voluptates dolorem veritatis rerum sint accusantium voluptas tempore.</p><p>Voluptatem ut eum tempore tempora. Ut esse ex enim ipsum. Voluptatem dolorem possimus ut.</p><p>Commodi fugiat excepturi facere incidunt aut. Tempora facere qui maiores error aliquam ipsam. Laudantium sequi qui earum rerum ex omnis.</p><p>Aliquid enim eum numquam ut consequatur sit officiis. Doloremque fugit consectetur modi perspiciatis nobis. Laboriosam unde harum soluta dolore. Accusantium ut molestiae est optio sed sed.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(10, 2, 1, 2, 'Omnis praesentium architecto non dolorem voluptatibus dolor eum dicta et minus ipsa est est.', 'dicta-harum-perferendis-et', 'Quis atque iusto fugiat et velit est repellat. Totam repellendus repellendus ullam qui ea sint et.', '<p>Deserunt dolorem impedit dolores odit ea. Tempora alias velit qui dolore temporibus. Rerum ipsa dolor quas quasi eveniet eaque. Omnis vitae ut quia quia fugiat. Mollitia porro aliquam non quis aut nam.</p><p>Non delectus quas ipsa quia velit voluptatem laudantium. Distinctio et et officiis. Asperiores consequatur sit in neque. Dolores officia enim eos aspernatur autem quis sunt.</p><p>Magni quisquam voluptates neque beatae. Expedita voluptatem eum ut numquam est. Est hic voluptates consequatur dolor officiis minima.</p><p>Quis debitis quia hic. Accusamus excepturi ipsam corporis. Eum aliquam voluptas id fugit expedita illum animi. Omnis molestiae molestiae qui aliquam explicabo tenetur et quisquam.</p><p>Et veritatis veritatis rem. Non sit dolor aut laborum consequuntur enim. Itaque voluptatum illum similique perferendis in enim nam. Eligendi deleniti aut aut dolor itaque.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(11, 1, 1, 2, 'Possimus magni delectus dolores dolor quam eos harum corporis dolorem vel.', 'quidem-in-aliquid-id-sed-sint-magnam-asperiores', 'Aut soluta cupiditate quia quas dolorem voluptatum. Non ducimus alias dolores eius tempora nesciunt aut. Voluptas sint saepe itaque dolorem cum quis iste animi.', '<p>Quidem totam in quis expedita magni consequatur quod. Amet dicta sint velit rerum et exercitationem amet. Aut facere et voluptas voluptatem. Alias culpa laborum magnam harum.</p><p>Quis nemo autem labore et earum quisquam consectetur. Similique quam corrupti nisi quam.</p><p>Nemo iure quidem qui vitae reiciendis eius. Expedita ut dolorem non et non.</p><p>Aliquam dicta autem voluptatem consequatur minima debitis quidem omnis. Beatae odio cumque ut deserunt qui. Debitis cupiditate error aut quas nobis nulla aliquid.</p><p>Deleniti incidunt natus ut dicta. Est ratione voluptatum accusamus nemo. Ut aut beatae veniam enim saepe velit eum. Cumque dolorem earum maiores.</p><p>Esse autem laudantium vero cupiditate nisi veritatis. Dolore esse aut sunt totam sit. Nisi voluptas sint quaerat nostrum corporis.</p><p>Minima delectus ut doloribus ea laboriosam distinctio fugiat quia. Voluptatibus sint debitis et veritatis blanditiis. Eligendi ut accusamus excepturi et sapiente quibusdam sed.</p><p>Et iste ea excepturi alias et voluptatibus. Facilis quia quia dolore sit illo. Aperiam molestiae ipsam sequi aut sit omnis. Et ut sunt hic vel commodi. Iure at animi saepe.</p><p>Consequatur eius sed itaque assumenda sunt sed incidunt. Alias qui quos aut est. Et sunt natus nisi. Ut voluptate voluptatem dolor mollitia.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(12, 2, 1, 2, 'Corporis et quia ut voluptate dolore dolores commodi id dicta et.', 'ea-sed-adipisci-soluta-a-molestiae', 'Quia omnis quia possimus sed tempore qui quidem. Blanditiis facilis enim est quasi quia pariatur provident. Molestiae assumenda quidem nobis cumque voluptatum rerum rerum. Repudiandae omnis dolorem ea quisquam.', '<p>Et accusamus aut perspiciatis adipisci aspernatur beatae ratione. Veniam qui reiciendis iure temporibus. Harum nihil consequatur numquam enim. Hic tenetur dolores et in.</p><p>Ipsum sit omnis voluptatem doloremque facilis magni. Aut ut est hic et repellat ut dolor. Nulla beatae voluptatem iure voluptatibus et minima explicabo. Aut enim et similique consequatur a aut.</p><p>Aliquid accusantium fugiat non aperiam tempora esse repellendus ducimus. Eaque repellat ipsum voluptatibus optio sint suscipit optio et. Temporibus est debitis consequatur.</p><p>Quisquam expedita numquam quia veniam et deserunt. Nobis dolor autem modi tempore aut. Quidem possimus voluptatem sed est maxime iste qui. Maiores quas suscipit alias non doloremque.</p><p>Eaque ex qui at. Dolor qui esse vel ut veniam molestias. Et porro commodi aut et incidunt. Quidem numquam aliquam est consequatur.</p><p>Dicta aut repudiandae quia aut qui aut. Aut molestias consequuntur est sapiente. Recusandae ipsa maiores modi id quas sit.</p><p>Optio est quasi harum odio facere eum. Tempore nihil quidem sapiente labore et. Temporibus et dolorem cum et dolores.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(13, 1, 1, 1, 'Eaque fugiat pariatur nulla quasi quos unde est modi quas est.', 'repudiandae-recusandae-qui-ut-sed-praesentium-voluptatum', 'Cumque aut consequatur ad quo et iste. Possimus quibusdam blanditiis impedit placeat alias magnam. Non repudiandae et enim voluptas dolorem esse sapiente. Voluptates numquam eos ullam quod sed.', '<p>Quia hic id corporis repudiandae voluptatem ipsum id. Et maiores et qui sit quo illum tenetur.</p><p>Iusto officia velit ad enim. Fuga modi qui assumenda veritatis minima. Vel quod et officia officiis. Non quos possimus dolor architecto optio dolores.</p><p>Omnis consequatur quam perferendis iusto. Id velit rerum sint qui. Perferendis et laborum ut soluta aut sed odit. Sunt non quidem ea ab dolores.</p><p>Temporibus et id atque voluptas animi quia. Commodi sed cumque numquam laborum suscipit rerum veritatis molestias. Vitae qui quibusdam quam debitis consequatur.</p><p>Dolores et et ad eum dolores sequi velit labore. Et totam maxime ullam a. Dolor ut voluptates qui voluptas. Iusto repellendus et ea minus voluptas deserunt qui.</p><p>Voluptatem earum incidunt qui reiciendis ut rerum voluptas. Dolorum sit voluptatem dolorem quos. Voluptate suscipit et sapiente est magni eum molestiae. Aut fuga distinctio veniam dolor. Optio ut aut nisi illum unde voluptas quos.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(14, 1, 1, 1, 'Quasi error consequatur qui sed pariatur molestiae distinctio quia.', 'expedita-optio-sunt-eum-vitae-est-nisi-voluptatum-est', 'Voluptatem facilis iste dolor soluta enim. Vel occaecati facilis qui. Doloremque eos saepe harum qui ea dolor et. Delectus odio similique nulla qui necessitatibus corporis. Doloribus sunt ut inventore.', '<p>Earum cupiditate dolores vel quisquam aut eaque quaerat porro. Voluptas animi libero quam cupiditate atque iure blanditiis eos.</p><p>Impedit repellendus numquam quo soluta nostrum magnam veritatis iste. Eos provident dolores eum voluptas maiores nisi. Est dolore odio qui laborum quis.</p><p>Distinctio quo excepturi non voluptas. Distinctio tempora consequatur sit commodi vero omnis minima. Veritatis officia amet rerum dolores aut blanditiis ex totam.</p><p>Illo reiciendis id assumenda temporibus animi aperiam. Voluptas asperiores dolor corrupti et aspernatur. Reiciendis natus numquam libero quos molestiae molestias illum voluptatem.</p><p>Occaecati ut nihil molestiae alias dolores. Ipsam eligendi ut rem ea iure quaerat. Ab saepe magni nihil voluptas totam corporis aut. Tempore enim nobis laudantium repellendus blanditiis ipsam.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(15, 1, 2, 2, 'Iste minus et quia et vitae voluptatibus nihil qui tempore eos in.', 'est-ut-corporis-laboriosam-dolores-aspernatur-qui-qui-ratione', 'Sit pariatur iste qui. Alias doloremque nostrum deleniti incidunt. Perspiciatis dolor explicabo perferendis. Cum consequatur est totam placeat.', '<p>Voluptatem suscipit qui quis. Commodi rerum incidunt ut ea. Quaerat quod doloremque rerum architecto explicabo architecto sunt.</p><p>Et voluptas repudiandae quis. Dolore totam et voluptatem aperiam et. Soluta deleniti ex repellendus consequuntur iure.</p><p>Quisquam eaque maxime saepe molestiae doloremque est sunt. Quia facilis dolorem et sequi ratione est et eum. Quaerat sed ratione vel autem labore sed qui.</p><p>Aut autem quia voluptas sunt. Dolorem culpa sunt perspiciatis sit incidunt qui. Velit sequi vitae doloribus qui quo sint minus. Dolores maxime a nisi tempora nulla quas aliquam qui.</p><p>Quod consequatur magnam est possimus et ex. Veniam omnis dolorem ipsam atque dolor reiciendis rem. Aut corporis qui dolores quia provident. Non eum et ut officiis.</p><p>Omnis natus voluptas incidunt unde qui qui. Alias deserunt et quasi reprehenderit necessitatibus cumque omnis. Reiciendis est libero facere possimus. Iure suscipit itaque similique non nam temporibus et. Vel et nesciunt id eos.</p><p>Autem quidem ut blanditiis eos exercitationem. Deleniti et natus et in nihil. Minima aspernatur voluptas esse sit. Quia qui praesentium quia odio quae neque non. Maiores ipsam praesentium sit inventore quasi sit provident ducimus.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(16, 1, 2, 1, 'Aliquid sequi voluptatem earum quo adipisci et explicabo aliquam inventore quia.', 'est-mollitia-architecto-nisi-sunt-asperiores-qui-eius', 'Laboriosam suscipit qui in excepturi. Non harum et et distinctio fugit. Sint voluptatem illum aspernatur et et. Eos est et voluptatem ut.', '<p>Ut ad saepe commodi est quisquam. Dolorem est id deserunt minus voluptates sunt. Quibusdam quia voluptates reiciendis.</p><p>Incidunt sint aut aliquam atque. Ipsum sit voluptatem in alias quia ipsum. Eaque eligendi consequatur omnis blanditiis laborum.</p><p>Impedit culpa quis aut quibusdam tempora omnis ea. Veniam repellat quia recusandae facere et. Vel ducimus qui blanditiis esse dolor.</p><p>Ipsam quidem repellat repudiandae soluta dolore esse voluptatem. Maiores accusamus sint saepe.</p><p>Illo atque molestiae incidunt molestiae quibusdam. Non cumque beatae et consequatur. Exercitationem iste ullam dignissimos voluptatum aut unde corrupti.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(17, 1, 1, 2, 'Mollitia omnis magni non quaerat id vel aut nisi.', 'mollitia-provident-blanditiis-tempora-ipsum-beatae-omnis-quae-hic', 'Illum nam sunt fugit quae deleniti ea. Delectus ea dolor nam saepe nam. Voluptatibus est consequatur quia unde.', '<p>Voluptatem quasi quis ut voluptatem id. Quasi nihil et aut debitis. Voluptatum iure consequatur ut qui maiores.</p><p>Et laboriosam alias veniam iure atque earum repellendus rerum. Porro quia quae itaque voluptatem voluptas quis. Vel molestias harum omnis amet earum et. Est doloribus et ut non eligendi. Sit sed dolor nihil nisi voluptas nihil.</p><p>Commodi quisquam aut sapiente recusandae. Cum non est est debitis. Occaecati similique qui molestiae doloribus necessitatibus modi. Explicabo possimus temporibus voluptas eligendi quos non.</p><p>Corporis sequi vitae reiciendis qui qui blanditiis. Dolores a eum sunt reprehenderit iure reprehenderit quia. Expedita necessitatibus provident praesentium et sit. Nulla sapiente vel sint saepe aut quo facere.</p><p>Rerum dolor quibusdam temporibus autem fugiat necessitatibus nam. Qui quisquam quo dolorem ut aut et. Cumque numquam provident rerum nisi. Dolorum atque incidunt nam atque saepe sit quo.</p><p>Unde esse aut sint rerum provident. Deserunt officiis veritatis rerum quia quidem ut. Ut exercitationem dolores earum numquam velit nisi sint. Ipsum sed voluptate maxime molestiae. Et et eos voluptates.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(18, 1, 2, 1, 'Quasi libero tempore eos et sit error molestiae natus dicta totam debitis.', 'minima-qui-quae-dolorem-nisi-perspiciatis-quas-natus-illum', 'Eos voluptatem eius est quis quaerat recusandae corrupti placeat. Ipsum maxime eligendi dolores qui et est. Dolorem nesciunt delectus et quam ut.', '<p>Totam praesentium labore at sed. Ut dicta assumenda nobis ut accusamus. Asperiores repudiandae molestiae suscipit voluptatem. Porro ut aut ut ipsam provident in.</p><p>Aperiam omnis tempora rem enim facilis in mollitia. Odio quam et vitae ea porro. Necessitatibus saepe temporibus ad quia sed quas. Quo occaecati dolores adipisci consequatur dicta earum alias.</p><p>Quas veritatis repudiandae in tempore et earum eum. Optio et cumque quae sed animi et qui. Qui nobis similique officia velit blanditiis. Adipisci et ut voluptatem ducimus ipsam consequatur ipsa.</p><p>Rerum repudiandae cupiditate id laboriosam dolor molestias dignissimos. Nisi error sed magnam magnam eum ut.</p><p>Pariatur facilis mollitia at nihil reiciendis. Eligendi ratione aperiam voluptatem sed. Excepturi magnam nihil rerum ut ut.</p><p>Laboriosam nihil quam excepturi corporis. Sequi deleniti minus eos provident ut illum necessitatibus.</p><p>Nostrum magnam optio consequatur eius. Error molestias omnis ab vel rerum doloribus. Nisi quisquam id sed blanditiis eius. Harum magni cum consequatur tenetur asperiores.</p><p>Hic autem autem enim minus voluptatum praesentium eaque. Aut autem doloribus eaque tenetur non molestias. Totam est itaque vel voluptas vel. Nemo veritatis est rerum iusto voluptates temporibus nihil. Nobis eveniet dolorem aut ut dolor quasi repellendus voluptatem.</p><p>Dicta iusto repellendus eos fuga. Aperiam doloremque molestiae at atque dolores dolor dolorem soluta. Et alias consectetur architecto id qui.</p><p>Voluptatum enim est ipsam est deserunt. Ratione deleniti repellat sapiente cum est et. Voluptatem eligendi dicta et vero. Porro amet est mollitia fugit totam quibusdam sit et. Nihil nesciunt aspernatur non exercitationem.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(19, 1, 2, 1, 'Rerum reiciendis aspernatur tenetur dolores rerum non voluptas fuga atque deserunt rerum repudiandae voluptatem.', 'ea-laboriosam-quaerat-enim-veritatis-et-aliquam', 'Distinctio amet perspiciatis beatae voluptatem tempora labore. Hic cupiditate exercitationem itaque ipsum nihil. Fugiat iusto tempore alias beatae officia. Beatae rerum sunt similique.', '<p>Voluptates est praesentium et quia vero earum. Error delectus et aut nam ea. Quia aut aut repellat vel dolores delectus.</p><p>Dolore aut consequatur qui quia laudantium. Aut sed porro harum eos ipsam est ut. Nihil maxime voluptas in voluptatem molestiae rerum quia. Consequatur nostrum facilis sed molestiae iste.</p><p>Quisquam debitis enim repellat animi corrupti illo omnis. Dolorem error quia aperiam dolorum eius. Recusandae molestiae nemo et totam autem molestias at. Ipsa ipsam omnis non qui molestiae quasi.</p><p>Sequi et voluptates quae voluptatibus nostrum provident. Aut voluptatibus iste quod provident harum ullam inventore. Nostrum maxime eum iste mollitia. Quam nobis non repudiandae iste rerum.</p><p>Error suscipit tenetur blanditiis perferendis voluptatem voluptatem. Excepturi recusandae maiores deserunt. Voluptate quaerat ut dolores qui. Nihil laborum doloribus non deleniti et cupiditate.</p><p>Quam culpa ea aut. Voluptatum qui accusamus quae labore placeat dolorum minima. Autem aut rem rerum commodi in architecto repellendus error. Ipsum dolores id porro iure dicta voluptatum aut maxime.</p><p>Rem asperiores necessitatibus sint asperiores aut quo quam culpa. Sunt tempore possimus tempora eveniet autem consequatur sed tempore. Mollitia ab ut qui et a. Voluptatem deserunt exercitationem magni vel mollitia magni iure accusamus.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(20, 2, 1, 2, 'Et adipisci voluptas ratione unde aliquid quibusdam alias eaque veritatis eos eaque minus.', 'debitis-dolor-similique-quos-voluptatem-ut-aliquid-sunt', 'Sapiente ut enim rerum perspiciatis exercitationem. Id beatae delectus praesentium incidunt molestiae incidunt. Quis repellendus est doloremque.', '<p>Quo aut perferendis omnis rem. Dolorem veritatis et nihil aspernatur quo itaque. Blanditiis deleniti quia molestias asperiores nam consectetur excepturi. Doloribus magnam itaque molestiae facere dolore corporis.</p><p>Eligendi maiores quae ut impedit quas ut. Harum commodi est odio excepturi enim. Sit aut cupiditate commodi praesentium doloribus explicabo. Asperiores et nesciunt velit nobis sequi.</p><p>Ut debitis corporis ut et dolorem nemo voluptatem. Dolorem dolores ea consectetur quia. Quaerat sit recusandae nobis. Necessitatibus impedit exercitationem sapiente dolores culpa placeat fugiat.</p><p>Eum laborum aut officia eos. Molestiae dolorem culpa iusto. Qui aut ratione omnis. Aut suscipit alias eius rerum.</p><p>Repudiandae maxime odit velit veritatis occaecati ad voluptatem. Et aliquid laboriosam a culpa quia est. Quam tenetur quas esse enim sit.</p><p>Quo minus ipsam voluptatem. Voluptas at aliquam iste. Velit ipsa quaerat recusandae odio hic dolorem harum. Eum sit sit consectetur nobis.</p><p>Deserunt quidem voluptatibus molestiae iusto eius rerum natus. A minus aliquam ut quidem deserunt nesciunt tempora. Tenetur delectus laborum quam nostrum doloribus.</p>', NULL, '2023-01-12 16:44:39', '2023-01-12 09:44:39', '2023-01-12 09:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Berita', 'berita', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(2, 'Pengumuman', 'pengumuman', '2023-01-12 09:44:39', '2023-01-12 09:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_12_21_033325_create_artikels_table', 1),
(4, '2022_12_21_034339_create_kategoris_table', 1),
(5, '2022_12_26_091043_create_statuses_table', 1),
(6, '2022_12_27_172345_create_siswas_table', 1),
(7, '2022_12_29_135416_create_profils_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `slug`, `judul`, `isi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'est-neque-voluptas-exercitationem-odio-omnis-aliquam-velit', 'hero', 'better future for your kids!', 'profil-images/Qba5UyWBSxnXvYIpOPqszrN87eT8FAoKVUIZQ0sN.png', '2023-01-12 09:44:39', '2023-01-12 09:56:13'),
(2, 'quia-vel-tempora-sit-recusandae', 'subtitle', 'Let the child be the director, and the actor in his own play.', 'profil-images/EVuY5gii6PTdR6138UHa2QAOAG0WD3yQmjupOt5W.jpg', '2023-01-12 09:44:39', '2023-01-12 09:55:56'),
(3, 'quasi-dolorem-modi-ducimus-facilis-voluptas-sapiente', 'Visi', 'Terwujudnya lembaga Pendidikan Anak Usia Dini (PAUD) yang terjangkau dan berkualitas untuk mempersiapkan generasi penerus yang berkompeten dalam ilmu pengetahuan berlandaskan iman dan taqwa kepada Allah SWT. Sesuai dengan usia perkembangan anak didik.', NULL, '2023-01-12 09:44:39', '2023-01-12 10:01:36'),
(4, 'rerum-quos-voluptatem-quia-omnis-optio', 'Misi', 'Membangun komunikasi yang baik dengan wali murid dan lingkungan dalam upaya penyadaran akan pentingnya pendidikan bagi masa depan yang lebih baik.<br/>Mewujudkan sarana dan prasarana sekolah yang memadai untuk menjamin berlangsungnya kegiatan belajar mengajar.<br/>Menciptakan program tambahan sesuai perkembangan dan tuntutan jaman disamping program pokok yang sudah ada.<br/>Selalu meningkatkan kualitas pendidik dan peserta didik seiring dengan kebutuhan dan tuntutan kemajuan.<br/>Membangun kerjasama yang baik dengan semua unsur yang terkait demi peningkatan mutu dan pelaksanaan program.', NULL, '2023-01-12 09:44:39', '2023-01-12 10:05:22'),
(5, 'atque-doloribus-voluptate-vel-officiis-repellendus', 'Telepon dan Whatsapp', '085101439432', NULL, '2023-01-12 09:44:39', '2023-01-12 10:06:26'),
(6, 'quibusdam-sequi-iure-est-magnam-autem-adipisci-omnis', 'Email Sekolah', 'tkmambaululum@gmail.com', NULL, '2023-01-12 09:44:39', '2023-01-12 10:06:50'),
(7, 'quia-repellat-similique-dignissimos-exercitationem-et', 'Alamat Sekolah', 'Jl. KH. Wahid Hasyim  RT 001 RW 001 Kampung Tengah Desa Sukowono Kec. Sukowono Kab. Jember<br>Kode Pos 68194', NULL, '2023-01-12 09:44:39', '2023-01-12 10:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nisn` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir` date NOT NULL,
  `usia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nisn`, `nama`, `slug`, `tempatlahir`, `tanggallahir`, `usia`, `jk`, `alamat`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 189219213, 'Lundy Alfandiarto', 'totam-eum-qui-quia-provident', 'Jember', '1994-05-19', '28', 'L', 'jl karimata gg masjid lingkungan gumuk kerang sumbersari', 'Aktif', 'siswa-images/uPwaCuooonAkRenIrj9XK5SdyzjIfX9qLt2kOc3L.png', '2023-01-12 09:44:39', '2023-01-12 10:17:32'),
(2, 183233274, 'Isabelle Feest Jr.', 'aut-voluptas-animi-officia-quis', 'Ottilietown', '1991-12-02', '5', 'P', '89080 Edwardo Motorway', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(3, 351242737, 'Connor Lowe', 'expedita-quas-iusto-est', 'Gladyceburgh', '1993-01-11', '3', 'P', '34859 Farrell Island', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(4, 620198284, 'Don Cruickshank', 'aut-vero-aliquid-voluptatem-aperiam-non-in', 'Sanfordfurt', '2019-01-18', '3', 'P', '698 Goyette Ranch Apt. 726', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(5, 241899730, 'Miss Reta Mante', 'ratione-minus-atque-a-facilis-sit', 'Lake Liza', '2002-06-14', '3', 'P', '8754 Tillman Locks Suite 861', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(6, 181275546, 'Mrs. Carrie Shanahan I', 'commodi-voluptas-illum-id-consequatur-quos', 'North Rachael', '1988-11-27', '5', 'P', '973 Bert Mill', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(7, 693571759, 'Michel Bergstrom', 'autem-eum-natus-enim-numquam', 'Hillshaven', '1981-03-20', '5', 'P', '7668 Bernier Port', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(8, 907704835, 'Elwyn Jakubowski', 'et-modi-ut-natus-iusto', 'Evebury', '1990-11-07', '3', 'P', '5922 Yost Street Apt. 458', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(9, 967608233, 'Annamarie Shanahan', 'sunt-ut-earum-alias', 'Lake Aliviashire', '2016-02-11', '5', 'P', '40345 Karlie Land Apt. 561', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(10, 277675118, 'Roel Cruickshank', 'laboriosam-et-quibusdam-sapiente-nisi-est', 'Edaborough', '1980-01-28', '5', 'P', '350 Paige Expressway Suite 363', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(11, 818723176, 'Roderick Nader', 'reiciendis-voluptatem-perferendis-ut-enim-recusandae-ducimus-consequuntur-odit', 'Larueburgh', '1980-03-28', '4', 'L', '7023 Feil Street Apt. 187', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(12, 462581381, 'Donald Labadie', 'eum-veritatis-iusto-pariatur-accusantium-perspiciatis-voluptatem-corrupti', 'Wintheiserbury', '1985-05-03', '4', 'L', '99455 Littel Drives', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(13, 807598852, 'Dr. Tillman Daugherty I', 'aut-eaque-quia-vel-quod-sed', 'New Carson', '1998-11-01', '3', 'P', '677 Orlo Light', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(14, 749550680, 'Catherine Hyatt', 'rerum-et-qui-in-repellat-neque-cupiditate', 'Lake Louie', '1996-01-13', '4', 'P', '581 Marianna River', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(15, 382254421, 'Mr. Okey Carroll II', 'qui-et-ut-dolorum-iusto-laudantium', 'Manleystad', '1977-08-04', '5', 'P', '4854 Aaron Cliff', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(16, 574222763, 'Addison Cummings', 'dolorem-voluptatem-id-nulla-nihil-rerum-possimus-rerum', 'West Thelma', '1991-12-16', '5', 'P', '2258 Derek Locks', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(17, 415331241, 'Elsie Carter', 'sint-repellendus-dolores-omnis-quasi-necessitatibus-animi', 'New Naomiburgh', '2016-01-16', '5', 'L', '4372 Terrill Stravenue', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(18, 335534532, 'Mr. Esteban Flatley', 'distinctio-nulla-nihil-autem-quia', 'Priceborough', '2002-08-23', '3', 'L', '1561 Krajcik Islands Apt. 812', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(19, 276132093, 'Prof. Antonette West Jr.', 'voluptate-dolorum-illo-eligendi-delectus-aut-libero', 'South Tyson', '1990-12-29', '5', 'P', '5109 Anais Stravenue Suite 743', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(20, 245943548, 'Dr. Lemuel Green MD', 'velit-qui-quibusdam-repellendus-voluptas', 'Rosalynport', '1984-05-05', '4', 'L', '4305 Vaughn Overpass Suite 509', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(21, 756763371, 'Kole Bernier', 'dolorem-ut-vero-et-voluptas', 'New Rettashire', '2002-05-29', '4', 'P', '42530 Javon Walk', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(22, 343767532, 'Destany Reynolds', 'ad-et-fuga-saepe-esse-neque-amet-sint', 'Bernardoview', '2001-08-04', '4', 'P', '11592 Joanie Throughway Suite 209', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(23, 867796170, 'Ms. Marisa Stamm', 'praesentium-tenetur-ad-animi-quia-explicabo-saepe-qui-et', 'Wunschfurt', '1978-08-23', '3', 'L', '48660 Anabelle Villages', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(24, 110906754, 'Karlie Kemmer', 'aut-natus-dolorum-et-cupiditate', 'Lake Axelmouth', '1993-01-21', '3', 'L', '7693 Guillermo Lake Suite 723', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(25, 335671546, 'Tessie Lindgren', 'aut-sunt-quas-dolores-ut', 'East Frederick', '2015-12-04', '3', 'L', '57906 Hickle Shores', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(26, 955148262, 'Sean Reinger', 'quam-aut-animi-illum-earum-molestiae-aut-beatae', 'Jerdeburgh', '1979-08-26', '4', 'P', '4216 Jennyfer Club Suite 703', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(27, 858691031, 'Kale Auer', 'officiis-quia-laborum-laboriosam-natus-facere-iure', 'Mrazmouth', '1978-09-02', '3', 'P', '7123 Don Brook Apt. 476', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(28, 443360686, 'Isaias Marks', 'corporis-quis-amet-ratione-magnam', 'Port Gregg', '1986-06-17', '3', 'L', '7276 Hettie Lights Apt. 136', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(29, 186110824, 'Prof. Johnson Bartoletti III', 'provident-ex-in-optio-enim-quia-numquam-debitis', 'New Drewview', '2012-01-22', '5', 'L', '83212 Jimmy Gateway Suite 495', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(30, 757512246, 'Hollis Gutkowski DDS', 'eligendi-laborum-voluptatibus-natus-sed-expedita', 'West Ciara', '2020-02-29', '3', 'P', '1121 Esmeralda Field Suite 246', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(31, 126043687, 'Anya Jones', 'nesciunt-quia-ea-eligendi-temporibus-quia-assumenda', 'West Alexandra', '2001-02-20', '3', 'P', '28795 Parisian Course Apt. 453', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(32, 630311770, 'Rosalyn Rempel', 'enim-eum-deleniti-aut-iure-quis-assumenda-rerum-eum', 'North Sincerefurt', '2005-05-14', '4', 'P', '77753 Hoeger Plains', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(33, 361595408, 'Precious Kulas Sr.', 'quia-enim-saepe-enim-temporibus-ab', 'West Billyberg', '2022-07-09', '4', 'L', '718 Kovacek Underpass', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(34, 687615929, 'Mr. Ismael Stiedemann', 'aut-harum-nihil-magni-voluptates-et-consequatur', 'Lake Isidro', '1984-02-27', '5', 'P', '500 Wiegand Shoals', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(35, 903994277, 'Belle Considine Jr.', 'recusandae-asperiores-aliquid-excepturi', 'Mertzport', '2015-01-14', '4', 'L', '110 Trace Islands', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(36, 916105509, 'Dr. Heather Prohaska IV', 'accusantium-vero-sit-autem-voluptates', 'Port Citlalliton', '2018-02-16', '4', 'L', '281 Abbott Pine Apt. 591', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(37, 944217831, 'Reginald Kozey', 'illum-beatae-et-sed-quo-amet-voluptatem-officia', 'Harveystad', '1972-04-15', '4', 'P', '5043 Nienow Ramp Suite 709', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(38, 975929119, 'Dr. Jeramy Carter DVM', 'deleniti-impedit-voluptatum-velit-dolores', 'East Loniestad', '2015-01-13', '5', 'P', '3010 Clark Station Suite 745', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(39, 228259735, 'Miss Selina Stoltenberg DDS', 'et-iste-hic-at-enim-aut-sunt', 'Alexisland', '2015-03-18', '4', 'L', '711 Batz Manor', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(40, 578764118, 'Rosemary Kunde DDS', 'aspernatur-dicta-non-minus-velit-voluptatum-nobis-natus', 'North Javon', '1978-05-27', '3', 'L', '8467 Karley Islands Apt. 689', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(41, 409470516, 'Natalie Kertzmann', 'quaerat-qui-excepturi-sit-voluptas-vel', 'Solontown', '1979-06-15', '4', 'P', '678 Maryam Plain', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(42, 744791582, 'Mekhi Yundt Jr.', 'sed-aut-dolor-hic-atque-et-soluta-nisi', 'East Edythechester', '1982-10-08', '4', 'P', '17888 Ankunding Route', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(43, 587320663, 'Prof. Royce Moore MD', 'vel-tempore-eaque-est-quae-voluptatum-optio-nesciunt', 'Janetmouth', '2002-01-01', '5', 'L', '229 Mitchell Plains Suite 619', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(44, 455045738, 'Vincent Homenick', 'autem-praesentium-reprehenderit-alias-id-quisquam-consequatur', 'Donnellyhaven', '1995-11-22', '3', 'P', '9469 Arlie Orchard Apt. 958', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(45, 509401524, 'Prof. Brandyn Beatty', 'omnis-quidem-molestiae-praesentium', 'Wolfmouth', '1993-06-27', '4', 'L', '17828 Brekke Valley', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(46, 335268050, 'Ladarius Altenwerth', 'omnis-quam-rerum-expedita-dolore', 'Lake Elsaborough', '2000-02-07', '3', 'P', '19248 Lindsay Overpass', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(47, 477036693, 'Juliana Little', 'sint-itaque-non-qui-incidunt-blanditiis', 'East Ginomouth', '1992-12-29', '5', 'L', '63622 Schuppe Spurs Apt. 981', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(48, 405935048, 'Dr. Zelda Brakus II', 'aut-nemo-sit-minima-nesciunt-enim', 'West Normaview', '1979-02-26', '4', 'L', '32047 Goyette Coves Apt. 778', 'Lulus', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(49, 325325537, 'Mrs. Katharina Shanahan', 'sunt-et-aperiam-qui-accusamus', 'East Elyssamouth', '1974-08-29', '3', 'L', '9086 Bashirian Parkway', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(50, 117646475, 'Prof. Skyla Padberg', 'dolore-veniam-magni-sed-aut-odio-harum', 'East Leonie', '2020-10-28', '4', 'P', '14166 Reyes Mills', 'Aktif', NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Draft', 'draft', '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(2, 'Terbit', 'terbit', '2023-01-12 09:44:39', '2023-01-12 09:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nuptk` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isadmin` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `slug`, `email`, `password`, `nuptk`, `nama`, `tempatlahir`, `tanggallahir`, `jk`, `alamat`, `pendidikan`, `gelar`, `jabatan`, `isadmin`, `image`, `created_at`, `updated_at`) VALUES
(1, 'lundy', 'lundyscript@gmail.com', '$2y$10$kx7SY1D42JX6zQlfgH5siODWvBTEpXZ96XVoLilcbKyYBLJwZF9Se', 1210651002, 'muhamad lundy', 'jember', '1994-05-19', 'L', 'jl karimata gg masjid lingk gumuk kerang sumbersari', 'S1', 'S.Kom.', 'Admin', 1, 'guru-images/fTcRF9aNTDNlKI1VO2sZv2G55Dx5flcLNoXqUQqI.png', '2023-01-12 09:44:39', '2023-01-12 10:15:42'),
(2, 'odit-veritatis-nihil-quia-deserunt-laborum-ea-corporis', 'reba27@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 814199605, 'Supriati Ningsih', 'Jember', '2010-05-12', 'P', '3240 Bartholome Station Suite 374', 'S2', 'S.Pd., M.Pd.', 'Kepala Sekolah', 0, 'guru-images/rGu0fpIofticIlSX36gP9JAk6LmnFTFDlBGwKxbt.png', '2023-01-12 09:44:39', '2023-01-12 10:16:24'),
(3, 'magni-non-enim-et-sit', 'rchristiansen@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 542365641, 'Prof. Alford Hammes V', 'Kiramouth', '1970-08-06', 'L', '401 Koch Circles', 'S2', 'M.Pd.', 'Guru', 0, NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39'),
(4, 'distinctio-sint-reiciendis-id-porro-tempore-itaque', 'jwatsica@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 417143121, 'Laisha Sawayn', 'West Guadalupe', '2005-09-20', 'L', '74327 Frida Fork', 'S1', 'S.Pd.I.', 'Guru', 0, NULL, '2023-01-12 09:44:39', '2023-01-12 10:16:32'),
(5, 'consequuntur-quas-vero-inventore-perferendis-maiores-quisquam-atque', 'blanche.marks@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 883081706, 'Prof. Jamaal Morar Jr.', 'Prestonfort', '2022-09-19', 'P', '3503 Jessica Walk', 'S1', 'S.Pd.', 'Guru', 0, NULL, '2023-01-12 09:44:39', '2023-01-12 10:16:39'),
(6, 'vitae-ut-iusto-fugit-voluptatem-aut', 'gkunde@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 437309994, 'Junior Rippin', 'Ebertborough', '2020-11-02', 'L', '86291 Laurie Glen', 'S1', 'M.Pd.', 'Guru', 0, NULL, '2023-01-12 09:44:39', '2023-01-12 10:16:48'),
(7, 'voluptate-quas-aut-sunt-aut', 'lilyan.harris@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 363166750, 'Trevor Homenick', 'Candelariofurt', '1971-11-21', 'L', '189 Chadrick Circle Suite 874', 'S2', 'S.Pd.', 'Guru', 0, NULL, '2023-01-12 09:44:39', '2023-01-12 09:44:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artikels_slug_unique` (`slug`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_nama_unique` (`nama`),
  ADD UNIQUE KEY `kategoris_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_nisn_unique` (`nisn`),
  ADD UNIQUE KEY `siswas_nama_unique` (`nama`),
  ADD UNIQUE KEY `siswas_slug_unique` (`slug`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statuses_nama_unique` (`nama`),
  ADD UNIQUE KEY `statuses_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_slug_unique` (`slug`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nuptk_unique` (`nuptk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
