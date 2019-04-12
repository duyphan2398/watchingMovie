-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 12, 2019 lúc 06:59 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cinema`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` text COLLATE utf8_unicode_ci NOT NULL,
  `password_admin` text COLLATE utf8_unicode_ci NOT NULL,
  `ten_admin` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`, `ten_admin`) VALUES
(1, 'duyphan', 'Duyphan', 'Phan Nhật Duy'),
(2, 'phannhatduy', 'phannhatduy', 'Phan Duy'),
(3, 'nhatduy', 'nhatduy', 'Phan Nhật Duy'),
(4, 'duyphan123', '123456', 'phan duy'),
(5, 'duyphan123456', '123456', 'duy phan nhat '),
(6, 'nhatduyphan', '987654', 'Phan Nhat Duy'),
(7, 'duyphan12', 'zxcvbn', 'duy duy duy '),
(8, 'duyphan2398', '123456', 'duyduy duy duy'),
(9, 'duydayne', '123456', 'phan nhat duy '),
(10, 'duycuccu', '123456', 'duy nhat phan '),
(11, 'duyduyduyduy', 'qwerty', 'duy phan nhat '),
(12, 'duyduyphan', 'asdfgh', 'phan'),
(13, '51603079', '123456', '123456'),
(14, 'duyeptrai', '123456', 'duy dep trai '),
(15, 'duydepgai', '123456', 'phanduy'),
(16, 'duyxinhgai', '123456', 'Phan Nhat Duy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `id_phim` int(11) NOT NULL,
  `ten_phim` text COLLATE utf8_unicode_ci NOT NULL,
  `thongtin_phim` text COLLATE utf8_unicode_ci NOT NULL,
  `id_theloai` int(2) NOT NULL,
  `anh_phim` text COLLATE utf8_unicode_ci NOT NULL,
  `url_phim` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id_phim`, `ten_phim`, `thongtin_phim`, `id_theloai`, `anh_phim`, `url_phim`) VALUES
(1, 'Chiến tranh vũ trụ', 'Các nghiên cứu về vũ trụ luôn song hành với giới quân sự, dù các cường quốc chưa công khai ý định biến những phát kiến liên quan đến không gian thành lợi thế chiến trường.“Chúng ta đều được tạo ra từ vật chất của các ngôi sao”, câu nói nổi tiếng của nhà vũ trụ học Carl Sagan đã trở thành kiến thức phổ biến, thường được nhắc tới trong phim ảnh, thơ ca và âm nhạc.Tuy nhiên, không phải ai cũng biết rằng hành tinh của chúng ta cùng với mọi thứ bên trong và bên trên - bao gồm cả con người - đều được tạo ra từ các nguyên tố nặng sinh ra từ phản ứng hạt nhân. Loại thử nghiệm vốn bị cả thế giới lên án trớ trêu thay lại chính là những thực nghiệm xác minh điều này', 1, '/data/anh/vientuong1.jpg', '/data/phim/vientuong1.mp4'),
(2, 'Con ma cô đơn', 'Cô đơn là cảm giác, đã là cảm giác thì người ta không bao giờ có thể định nghĩa được một cách thật rõ ràng. Cứ lửng lơ, lưng chừng… Lưng chừng nỗi buồn. Lưng chừng trống vắng. Lưng chừng hoài vọng. Lưng chừng xót xa. Rồi loay hoay. Rồi lại lối.Cuốn sách này, Lạc lối giữa cô đơn được viết trong những đêm dài… một mình…mất ngủ và đầy khói thuốc.Viết cho những kẻ ban ngày cười nói hân hoan để khi đêm xuống lạc lõng, cô đơn và mâu thuẫn ngay chính trong bản tự của mình. Nếu bạn sống về đêm, ngẫm về đêm và yêu bóng tối đến mê muội như cách yêu chính cái phần con người thật nhất của mình khi ấy… Vẫn một Minh Nhật ấy, mang nặng một nỗi sầu, băn khoăn về cuộc sống. Vẫn một Minh Nhật ấy, làm cảm lòng người ta bằng những câu chuyện nhẹ nhàng mà buồn đến miên mải. Ta tìm thấy một Minh Nhật cô đơn, tìm thấy một bản thân mình cô đơn…Lạc lối giữa cô đơn cuốn sách này, mới chỉ nghe tên thôi đã thấy loay hoay đến vậy. Đã cô đơn, còn lạc lối! Đôi khi, cảm xúc cô đơn không có ngay khi chúng ta vừa mới sinh ra, mà có khi ta bắt đầu biết yêu một ai đó. Thế nên, Chỉ một cô gái mà thôi, là Người yêu cũ của người yêu cũng bỗng làm con người ta chạnh lòng mà rơi vào trạng thái cô đơn. Đôi khi, lại vì Những điều chẳng thật sự có tên, như một Cơn mưa tháng ba vô tình đi lạc, một Khoảng sân rực rỡ gợi nhớ về tuổi thơ, hay như thói quen Chỉ uống trà lúc nửa đêm cũng bất ngờ kéo được lòng người rơi vào một đống cảm xúc lửng lơ, cô đơn đến hoang hoải.', 2, '/data/anh/kinhdi1.jpg', '/data/phim/kinhdi1.mp4'),
(3, 'Anh Ba lên phố', 'Vì hoàn cảnh trái ngang, Hai Lúa buộc phải dấn thân làm 1 cuộc phiêu lưu bất đắc dĩ. Không chỉ phiêu bạt ở vùng sông nước và đồi núi, Hai Lúa còn...đi lạc qua tận đất nước Campuchia. Trong hành trình của mình, Hai Lúa còn có 2 người bạn đồng hành \"cực...kì quặc\", và chính bộ ba này đã tạo nên đầy những tình huống dở khóc dở cười nhưng cũng đồng thời mở ra thông điệp:\" Sống thì phải chân thành, yêu thương mọi người và giúp nhau vượt qua khó khăn\". Một chuyến phiêu lưu kỳ thú với đầy ắp tình huống...', 3, '/data/anh/hai1.jpg', '/data/phim/hai1.mp4'),
(4, 'Chiến tranh lạnh', 'Chiến tranh Lạnh (1946–1989) là tình trạng tiếp nối xung đột chính trị, căng thẳng quân sự, và cạnh tranh kinh tế tồn tại sau Thế chiến II (1939–1945), chủ yếu giữa Liên bang Xô viết và các quốc gia đồng minh của họ, với các cường quốc thuộc thế giới phương Tây, gồm cả Hoa Kỳ. Dù các lực lượng tham gia chủ yếu không bao giờ chính thức xung đột, họ đã thể hiện sự xung đột thông qua các liên minh quân sự, những cuộc triển khai lực lượng quy ước chiến lược, một cuộc chạy đua vũ trang hạt nhân, tình báo, chiến tranh ủy nhiệm, tuyên truyền, và cạnh tranh kỹ thuật, như cuộc chạy đua không gian.\r\n\r\nDù là các đồng minh chống lại Phe Trục, Liên Xô, Hoa Kỳ, Anh Quốc và Pháp đã không đồng thuận trong và sau Thế chiến II, đặc biệt về việc thiết lập thế giới thời hậu chiến. Khi cuộc chiến kết thúc, họ chiếm hầu hết châu Âu, với việc Hoa Kỳ và Liên Xô là các lực lượng quân sự mạnh nhất.\r\n\r\nLiên Xô lập ra Khối Đông Âu với các quốc gia Đông Âu mà họ giải phóng, sáp nhập một số trở thành Các nước Cộng hoà Xã hội chủ nghĩa Xô viết và duy trì các quốc gia khác như nước đồng minh của mình, một số nước trong số đó sau này được củng cố vào Khối Hiệp ước Warsaw (1955–1991). Hoa Kỳ và một số quốc gia Tây Âu thì lập ra chính sách ngăn chặn chủ nghĩa cộng sản như là chính sách phòng vệ của họ, và lập ra các liên minh (ví dụ NATO, 1949) cho mục đích đó. ', 4, '/data/anh/hanhdong1.jpg', '/data/phim/hanhdong1.mp4'),
(5, 'Romio và Juliet', 'Romeo và Juliet là một vở bi kịch được viết bởi nhà văn đại tài của nước Anh, William Shakespeare. Trong những vở kịch được viết bởi Shakespeare thì vở này cùng Hamlet là 2 vở nổi tiếng nhất và thường xuyên được diễn lại bởi hậu thế. Ngày nay, cái tên Romeo và Juliet thường dùng để chỉ những cặp tình nhân trẻ đang trong giai đoạn chớm nở và mãnh liệt. Vở kịch này về sau không chỉ phổ biến trong nghệ thuật sân khấu, mà còn được chuyển thành điện ảnh, opera, tiểu thuyết,... Sau thời đại chế độ quân chủ được phục hồi tại nước Anh, Romeo và Juliet được bảo tồn và càng được phổ biến rộng rãi bởi William Davenant. Các tác phẩm điện ảnh của vở kịch bao gồm bản năm 1935 của George Cukor, bản năm 1968 của Franco Zeffirelli, bản phim năm 1996 của Baz Luhrmann và bản phim năm 2013 của Carlo Carlei.', 5, '/data/anh/tinhcam1.jpg', '/data/phim/tinhcam1.mp4'),
(6, 'Chiến tranh Việt Nam ', 'Chiến tranh Việt Nam (1955–1975) là giai đoạn thứ hai và là giai đoạn khốc liệt nhất của Chiến tranh trên chiến trường Đông Dương (1945–1979), bắt đầu ngày 1 tháng 11 năm 1955 khi Phái bộ Cố vấn và Viện trợ Quân sự Hoa Kỳ (MAAG) được thành lập ở miền Nam Việt Nam và kết thúc ngày 30 tháng 4 năm 1975 khi Tổng thống Dương Văn Minh của Việt Nam Cộng hòa đầu hàng Mặt trận Dân tộc Giải phóng miền Nam Việt Nam. Đây là cuộc chiến giữa hai bên, một bên là Mỹ, Việt Nam Cộng hòa ở miền Nam Việt Nam cùng một số đồng minh khác của Mỹ như Úc, New Zealand, Hàn Quốc, Thái Lan và Philippines tham chiến trực tiếp[28]; một bên là Mặt trận Dân tộc Giải phóng miền Nam, Cộng hòa Miền Nam Việt Nam tại miền Nam Việt Nam phối hợp cùng Việt Nam Dân chủ Cộng hòa, được sự viện trợ vũ khí và chuyên gia từ các nước xã hội chủ nghĩa, đặc biệt là của Liên Xô[29] và Trung Quốc. Cuộc chiến này tuy được Mỹ và các đồng minh gọi là \"Chiến tranh Việt Nam\" do chiến sự diễn ra chủ yếu tại Việt Nam, nhưng đã lan ra toàn Đông Dương, lôi cuốn vào vòng chiến cả hai nước lân cận là Lào và Campuchia ở các mức độ khác nhau. Do đó, cuộc chiến còn được gọi là Chiến tranh Đông Dương lần thứ hai và do đối thủ chính là Mỹ nên cuộc chiến thường được gọi là Kháng chiến chống Mỹ tại 3 nước Đông Dương.[30] Cuộc chiến này chính thức kết thúc vào ngày 30 tháng 4 năm 1975, khi Tổng thống Dương Văn Minh của Việt Nam Cộng hòa đầu hàng Quân Giải phóng miền Nam Việt Nam, trao chính quyền lại cho Chính phủ Cách mạng lâm thời Cộng hòa miền Nam Việt Nam. Quân Mỹ cũng rút toàn bộ lực lượng quân sự và di tản người Mỹ khỏi ba nước Đông Dương sau sự kiện này.', 6, '/data/anh/lichsu1.jpg', '/data/phim/lichsu1.mp4'),
(7, 'UFO đồ bộ ', 'Douglas Vakoch, chủ tịch tổ chức Gửi tin nhắn cho Trí thông minh ngoài trái đất (METI), nói: “Nếu như vậy, làm cách nào chúng ta khiến những kẻ trông coi vườn thú ấy lộ mặt?”\r\nVakoch tin rằng việc tiếp tục tìm sự sống ngoài hành tinh là chìa khóa cho câu trả lời.\r\n“Nếu chúng ta đến vườn thú và bị một con ngựa vằn phản ứng, đó có thể phản ảnh mối quan hệ giữa chúng ta và ngựa vằn”.\r\n“Chúng ta cũng có thể làm điều tương tự bằng cách gửi tín hiệu mạnh mẽ đến các vì sao”, Vakoch nói.\r\nVakoch đặt giả thuyết rằng nếu có dạng sống ngoài hành tinh với công nghệ hiện đại, có thể xâm chiếm Trái đất thì họ có lẽ đã tìm ra con người từ lâu.\r\n“Trái đất hình thành sự sống được 2,5 tỷ năm, vậy nên nếu có dạng sống ngoài hành tinh tương đương như chúng ta thì họ đã có rất nhiều thời gian để tìm đến gặp chúng ta”, Vakoch nói.', 1, '/data/anh/vientuong2.jpg', '/data/phim/vientuong2.mp4'),
(8, 'Búp Bê Annabelle', 'Phim Búp Bê Annabelle là một bộ phim điện ảnh kinh dị do Mỹ sản xuất được đạo diễn kì cựu James Wan phụ trách. Nội dung phim kì này xoay quanh về câu chuyện đằng sau con búp bê Annabelle bị quỷ ám sau loạt truyện \" The Conjuring \" từng tạo tiếng vang trong năm 2013. Đi sâu vào bộ phim lần này Annabelle xuất hiện tại một gia đình vợ chồng trẻ, món quà được John tặng vợ mình nhân dịp sinh nhật chính là con búp bê Annabelle. Đêm đầu tiên Sarah cảm nhận được sự kì bí xảy ra xoay quanh gia đình hàng xóm, họ bị chính Annabelle điều khiển và giết hại lẫn nhau. Kính mời các bạn cùng theo dõi phim Búp Bê Annabelle', 2, '/data/anh/kinhdi2.jpg', '/data/phim/kinhdi2.mp4'),
(9, 'Hài Trường Giang', 'ới sự xuất hiện của hàng loạt danh hài được yêu thích nhất trong nước lẫn hải ngoại như Hoài Linh, Chí Tài, Tấn Beo, Trường Giang, Việt Hương, Trấn Thành, Minh Nhí, Đại Nghĩa…Đặc biệt với mật độ phát sóng dày đặc trên 20 đài trải khắp các tỉnh miền Tây Nam Bộ, Đông Nam Bộ, Tây Nguyên và các tỉnh miền Trung quí vị sẽ dễ dàng có được những phút giây vui tươi và thú vị nhất với những Hài Kịch - Cafe Cười bên cạnh những danh hài mình yêu thích.', 3, '/data/anh/hai2.jpg', '/data/phim/hai2.mp4'),
(10, 'Em của Anh đừng của Ai', 'Bài hát: Em Của Anh Đừng Của Ai - Long Cao \r\n Bao nhiêu lâu rồi, tình cờ gặp nhau nghe tim vỡ đôi, \r\nTừ ngày em về bên ấy, anh buồn biết mấy \r\nKiếm tìm hoài thôi \r\nAnh chưa bao giờ, một lần nào quên đi đôi mắt thơ \r\nDù mình chưa từng tay nắm, chưa hề say đắm \r\nMôi chưa tìm môi \r\n Và em vẫn cứ dịu dàng như thế \r\nNụ cười ấy vẫn cứ ngọt ngào như thế \r\nCòn anh vẫn luôn là anh ngây ngô ngu khờ, ngây ngô ngu khờ \r\nRồi chợt thấy bỗng chốc lòng mình vui quá \r\nTìm được nhau xóa hết từng ngày băng giá \r\nMười năm trôi đi thật nhanh, như vừa hôm qua ', 5, '/data/anh/tinhcam2.jpg', '/data/phim/tinhcam2.mp4'),
(11, 'Napoléon Bonaparte', 'Napoléon Bonaparte (phiên âm: Na-pô-lê-ông Bôn-na-pác; tiếng Pháp: Napoléon Bonaparte [napoleɔ̃ bɔnɑpaʁt], tiếng Ý: Napoleone Buonaparte; một số sách Việt còn ghi tên ông là Nã Phá Luân (拿破侖); 15 tháng 8 năm 1769 – 5 tháng 5 năm 1821) là một nhà quân sự và nhà chính trị tiêu biểu của Pháp trong và sau cuộc cách mạng Pháp cũng như các cuộc chiến tranh liên quan ở châu Âu.', 6, '/data/anh/lichsu2.jpg', '/data/phim/lichsu2.mp4'),
(12, 'Rambo', 'ambo (hay còn biết với tựa đề John Rambo hoặc Rambo IV) là một bộ phim hành động, chiến tranh của Mỹ do Sylvester Stallone làm đạo diễn, biên kịch và thủ vai chính. Phim được công chiếu ra các rạp vào tháng 1 năm 2008.\r\nĐây là phim thứ tư trong loạt phim Rambo, nó có câu tagline là Heroes never die.... They just reload (tạm dịch tiếng Việt: Những anh hùng không bao giờ chết.... Họ chỉ đang nạp đạn).', 4, '/data/anh/hanhdong2.jpg', '/data/phim/hanhdong2.mp4'),
(13, 'Trái đất diệt vong', 'Bí mật Trái Đất diệt vong (tựa gốc tiếng Anh: Oblivion) là một bộ phim viễn tưởng, hành động và tâm lý Mỹ năm 2013 của Joseph Kosinski làm đạo diễn kiêm biên kịch và sản xuất, Oblivion dựa theo một tiểu thuyết cùng tên của Joseph Kosinski và Arvid Nelson làm tác giả và có sự tham gia của dàn diễn viên Tom Cruise, Andrea Riseborough, Olga Kurylenko và Morgan Freeman.\r\nPhim được chiếu ra các rạp vào ngày 12 tháng 4 năm 2013 ở Việt Nam và ngày 19 tháng 4 năm 2013 tại Mỹ. Ở Việt Nam, Oblivion được biết với tựa đề Bí mật Trái Đất diệt vong.', 1, '/data/anh/vientuong3.jpg', '/data/phim/vientuong3.mp4'),
(14, 'Ám ảnh kinh hoàng', 'The Conjuring (tựa tiếng Việt: Ám ảnh kinh hoàng hay Gọi hồn) là một bộ phim kinh dị siêu nhiên của điện ảnh Hoa Kỳ công chiếu vào năm 2013, đạo diễn bởi James Wan. Hai diễn viên Vera Farmiga và Patrick Wilson vào vai Ed và Lorraine Warren, họ là những nhà điều tra các hiện tượng siêu nhiên xảy ra trên nước Mỹ. Những báo cáo của họ còn truyền cảm hứng cho cuốn tiểu thuyết Amityville Horror. Trong phim hai vợ chồng Warren là những người điều tra các hiện tượng siêu nhiên, họ đến để hỗ trợ gia đình Perron (Ron Livingston và Lili Taylor) đang trải qua các sự kiện ngày càng đáng lo ngại trong trang trại của họ ở Harrisville, Rhode Island vào năm 1971.\r\nThe Conjuring được phát hành tại Mỹ và Canada vào ngày 19 tháng 7 năm 2013, Vương quốc Anh và Ấn Độ vào ngày 2 tháng 8 năm 2013, và ở Việt Nam vào ngày 6 tháng 9 năm 2013. Bộ phim nhận được đánh giá tích cực từ các nhà phê bình phim và khán giả. Bộ phim cũng thành công tại phòng vé khi thu hơn 318 triệu đô la Mỹ trên toàn thế giới, trong khi kinh phí chỉ là 20 triệu đô la.', 2, '/data/anh/kinhdi3.jpg', '/data/phim/kinhdi3.mp4'),
(15, '3 ông thầy bói', 'Phim hài là thể loại phim nhấn mạnh về tính hài hước. Phim thường có kết thúc có hậu. Một trong những dòng phim lâu đời nhất, một trong số những bộ phim câm đầu tiên chính ch phim hài. Nhiều phim là những câu chuyện không gì hơn ngoài mục đích giải trí thì cũng có những phim đề cập tới những vấn đề chính trị, xã hội.', 3, '/data/anh/hai3.jpg', '/data/phim/hai3.mp4'),
(16, 'Thủy quân lục chiến', 'Thủy quân lục chiến, (Tiếng Anh: Marines) là thành viên của lực lượng quân sự phục vụ với tư cách lực lượng vũ trang ngoại biên, thường tập trung trên các chiến hạm và tham gia tấn công từ biển vào đất liền.Truyền thống xưa của thủy quân lục chiến là bảo vệ sĩ quan bộ chỉ huy của tàu chiến trong trường hợp có phiến loạn trên tàu. Trong quân đội hiện đại, thủy quân lục chiến là những toán quân di động, với công tác đặc biệt trong những cuộc tấn công từ biển vào đất liền.', 4, '/data/anh/hanhdong3.jpg', '/data/phim/hanhdong3.mp4'),
(17, 'Rosé', 'Rượu vang hồng được làm bằng giống nho đỏ, nhưng vỏ không nằm lâu trong nước nho, do đó loại rượu này không có nhiều vị chát của tannin từ vỏ trái nho như vang đỏ. Rượu vang trắng có thể trộn từ 10-20% rượu vang đỏ để làm rượu vang hồng xửi bọt hay champagner hồng, ngoài ra thì không được phép. Ở Đức những năm gần đây số lượng tiêu thụ đã gia tăng từ 2 % lên tới 8 % tổng số rượu vang', 5, '/data/anh/tinhcam3.jpg', '/data/phim/tinhcam3.mp4'),
(18, 'Athena', 'Theo Thần phả (Θεογονία, Theogonia) của Hesiod, Zeus đã ăn nằm với Methis, con gái của Okeanos. Khi Methis mang thai, Zeus đã được các nữ thần Vận Mệnh cảnh báo rằng đứa con do Methis sinh ra sau này sẽ lật đổ ông, giống như ông đã từng đoạt ngai vàng của cha mình (Cronus) trước kia.\r\nZeus sợ hãi Athena (con gái do Methis sinh ra) là do một lời sấm truyền đối với Metis. Lời sấm đó nói rằng: \"Nếu Metis sinh ra con trai thì đứa con trai này sẽ lật đổ quyền lực của người cha, như Zeus đã từng làm đối với Cronus trước đây. Còn nếu Metis sinh ra con gái thì người con gái này sẽ có sức mạnh về trí tuệ và cơ thể ngang với người cha\".', 6, '/data/anh/lichsu3.jpg', '/data/phim/lichsu3.mp4'),
(19, 'Trở về tuổi thơ', 'Hãy tạm gác qua những trăn trở, mệt mỏi, lo toan mà ngắm nhìn những khoảnh khắc tuổi thơ để nhớ rằng: \"À thì ra... mình đã có một thời vô lo, hồn nhiên như thế\"', 1, '/data/anh/vientuong4.jpg ', '/data/phim/vientuong4.mp4'),
(20, 'The null', 'The Nun (Ác Quỷ Ma Sơ) Lấy bối cảnh một tu viện thuộc Romania năm 1952, trước những sự kiện diễn ra trong \"The Conjuring\" và \"Annabelle\". Sau cái chết kỳ dị và bí ẩn của một nữ tu trẻ ở tu viện, một linh mục với quá khứ ám ảnh và một mục sư chưa thực hiện lời tuyên thệ cuối cùng được Vatican cử đến để điều tra sự việc.   Họ đã cùng nhau khám phá ra một sự thật khủng khiếp. Không chỉ gặp nguy hiểm đe dọa mạng sống, cả hai còn phải đối mặt với sự đe dọa về đức tin lẫn linh hồn trước một thế lực tàn độc đội lốt một nữ tu ma quỷ.', 2, '/data/anh/kinhdi4.jpg', '/data/phim/kinhdi4.mp4'),
(21, 'Chú cọp lười biếng', 'Cười ngất với màn chơi bóng của những chú sư tử lười biếng Chỉ nằm 1 chỗ, nhưng ba chú sư tử vẫn chuyền bóng một cách lười biếng và hết sức... dễ thương!', 3, '/data/anh/hai4.jpg', '/data/phim/hai4.mp4'),
(22, 'Cướp biển càribe', 'Cướp biển vùng Caribbean là một loạt phim giả tưởng thể loại anh hùng dân gian do Jerry Bruckheimer sản xuất và dựa trên chủ đề trò chơi trong công viên cùng tên của hãng Walt Disney Pictures. Những đạo diễn của loạt phim bao gồm Gore Verbinski (1–3), Rob Marshall (4) và Joachim Rønning cùng Espen Sandberg (5). Kịch bản phim được viết chủ yếu bởi bộ đôi Ted Elliot và Terry Rossio (1–4), các biên kịch phụ khác bao gồm Stuart Beattie (1), Jay Wolpert (1) và Jeff Nathanson (5). Nội dung của loạt phim xoay quanh những cuộc phiêu lưu của Thuyền trưởng Jack Sparrow, Hector Barbossa, Joshamee Gibbs, Will Turner và Elizabeth Swann. Cướp biển vùng Caribbean được đặt trong bối cảnh lịch sử hư cấu, một thế giới phần lớn bị thống trị bởi Đế quốc Anh', 4, '/data/anh/hanhdong4.jpg', '/data/phim/hanhdong4.mp4'),
(23, 'Trái tim băng giá ', 'Phim Trái Tim Băng Giá: xem phim trai tim bang gia tron boSau khi từ Úc du học trở về, Bow hay tin người yêu mình đã lấy vợ. Vô cùng đau khổ, cô tìm đến quán ...', 5, '/data/anh/tinhcam4.jpg', '/data/phim/tinhcam4.mp4'),
(24, 'Chúa Trịnh lên ngôi ', 'Chúa Trịnh (chữ Hán: 鄭王 / Trịnh vương, chữ Nôm: 主鄭; 1545 – 1787) là một vọng tộc phong kiến kiểm soát quyền lực Đàng Ngoài suốt thời Lê Trung hưng, khi nhà vua tuy không có thực quyền vẫn được duy trì ngôi vị. Bộ máy triều đình lúc này hoạt động theo thể chế lưỡng đầu. Tổng cộng có 11 đời chúa Trịnh chính thức (nếu tính luôn cả Trịnh Kiểm là 12 đời chúa) cai quản xứ Đàng Ngoài trong hơn 2 thế kỷ.', 6, '/data/anh/lichsu4.jpg', '/data/phim/lichsu4.mp4'),
(25, 'Tận thế', 'Thể loại tận thế là thể loại con của khoa học viễn tưởng, các tác phẩm của thể loại này mô tả sự hủy diệt của nền văn minh do một thảm họa tồn vong như chiến tranh hạt nhân, đại dịch, người ngoài hành tinh xâm lăng, va chạm với thiên thể, người máy nổi loạn, kì dị công nghệ, thoái hóa giống nòi, hiện tượng siêu nhiên', 1, '/data/anh/vientuong5.jpg', '/data/phim/vientuong5.mp4'),
(26, 'Ngày không có mặt trời', 'Số lượng ngày với mặt trời lúc nửa đêm trong mỗi năm tăng dần lên khi người ta tiến sát lại gần hơn về phía cực của Trái Đất. Do hiện tại không có điểm định ...', 1, '/data/anh/vientuong6.jpg', '/data/phim/vientuong6.mp4'),
(27, 'Người ngoài hành tinh ghé thăm', 'Trong nhiều năm qua con người đã có rất nhiều nỗ lực tìm ra dấu tích của sự sống ngoài Trái đất. Mặc dù đã có rất nhiều câu chuyện ly kỳ được thêu dệt lên ...', 1, '/data/anh/vientuong7.jpg', '/data/phim/vientuong7.mp4'),
(28, 'Nỗi bùn của mẹ thiên nhiên', 'Tác phẩm của mẹ thiên nhiên: Loài rêu có thể lọc hết arsen trong nước đã được ... Nước nhiễm arsen - một loại chất rất độc - là vấn đề nổi cộm của nhiều quốc gia ... Thiên nhiên có thể tuyệt đẹp, nhưng cũng có thể buồn một cách thảm khốc ...', 1, '/data/anh/vientuong8.jpg', '/data/phim/vientuong8.mp4'),
(30, 'Đêm thanh trừng', 'Phim xoay quanh một đêm Thanh trừng mới, khi một nữ chính trị gia mẫn cán bị săn lùng bởi bọn sát thủ mang mặt nạ cùng những kẻ thù biến chất muốn ngăn ngừa cô đắc cử tổng thống,..Phim với sự tham gia của các diễn viên Frank Grillo, Elizabeth Mitchell, Mykelti Williamson...', 2, '/data/anh/kinhdi6.jpg', '/data/phim/kinhdi6.mp4'),
(31, 'Sát nhân hàng loạt', 'Tháng 3-2018, Cao Thừa Dũng bị tòa án nhân dân thành phố Bạch Ngân, tỉnh Cam Túc, Trung Quốc tuyên án tử hình vì các tội Cướp có vũ khí, Cố ý giết người, Cưỡng hiếp và Làm nhục thi thể.  Cao Thừa Dũng 54 tuổi, được đặt biệt danh là “Jack the Ripper” - một kẻ giết người hàng loạt không xác định, hoạt động trong khu vực nghèo khó trong và xung quanh vùng Whitechapel của London vào năm 1888 - của Trung Quốc.', 2, '/data/anh/kinhdi7.jpg', '/data/phim/kinhdi7.mp4'),
(32, 'Aladin', 'Aladin is a 2009 Indian Hindi fantasy adventure film directed by Sujoy Ghosh, and featuring, Jacqueline Fernandez, Ritesh Deshmukh, Amitabh Bachchan and Sanjay Dutt. The film performed poorly at the box office.', 3, '/data/anh/hai5.jpg', '/data/phim/hai5.mp4'),
(33, 'Cướp biển CÀ RI DÊ', 'Cướp hay cướp tài sản trong luật hình sự là một tội danh chỉ người nào sử dụng vũ lực, hoặc đe dọa sử dụng ngay tức khắc vũ lực đối với người khác nhằm ...', 3, '/data/anh/hai6.jpg', '/data/phim/hai6.mp4'),
(34, 'Sao chổi tàn phá ', ' Một trong những cột đá tại Gobekli Tepe có thể nhằm tưởng niệm sự tàn phá của vụ va chạm sao chổi, một trong những thời gian khủng khiếp ...', 1, '/data/anh/vientuong1.jpg', '/data/phim/vientuong1.mp4'),
(35, 'Bé ngu ngốc', 'May 8, 2017 - Cách đây 1,85 tỷ năm, vụ sao chổi đâm vào Trái Đất đã khiến một khu ... Tàn dư của vụ va chạm là những miếng đá núi lửa chứa niken, đồng, ...', 3, '/data/anh/hai7.jpg', '/data/phim/hai7.mp4'),
(36, 'Hoài Linh', 'Deficit een honderd valorem leelijk ons hun men voldoen product. Geslaagd op omgeving eigendom ad verbruik. Ter plaatsen loopbaan het ernstige aan met. Pataten meestal tunnels vordert zal was. Werkten sap wat gevoerd kamarat koopman brokken. Te gaan waar drie heen en of de. Wasschen ze ze uitgeput beroemde elkander ongeveer eigendom. Des het een maanden malakka haalden. Lossen dat marmer rijker weg gronds het tembun. De geduld noodig hadden in bakken ze steeds. ', 3, '/data/anh/hai2.jpg', '/data/phim/hai2.mp4'),
(37, 'Trấn Thành 3', 's missen. Hij lot ver poeloe rubben kleine spuwen. Afgestaan aangelegd versteend of te daaronder belovende. Bijzonders is de nu verdedigen aanplanten tinhoudend ongebruikt al. Staan ze al de matig is daken jacht. Ploegen den dat valorem werkten geweest tot gelegen.   Wat het wij ketting dus stellen geleden duivels leveren. Dik komen dagen mee steel matig liput per. Te afgetapt in moeilijk kinderen al ', 3, '/data/anh/hai5.jpg', '/data/phim/hai5.mp4'),
(38, 'Con quỷ nhỏ', 'Nadering te uitgaven opdrogen nu. Telok ze ugong in nu waren heele. Belasting gebergten moerassen gas behandeld far maleische. Uitrollen en denkbeeld prachtige ad. Voeden legden bakken ton denken breken gelukt toe. Kost weer sap tot duur volk vele eind uit. Die diende der bijeen jungle toe verder velden. Telok ouder zware der klein oog rente eerst mei. Drijven des hielden zij lot groeien bersawa geheven. Dag gesticht hij planters welvaart hun hectaren kolonist moeilijk. ', 2, '/data/anh/kinhdi1.jpg', '/data/phim/kinhdi2.mp4'),
(39, 'Tình yêu quá khứ ', 'Wat het wij ketting dus stellen geleden duivels leveren. Dik komen dagen mee steel matig liput per. Te afgetapt in moeilijk kinderen al mijnbouw smelting. Woekeraars initiatief geruineerd insnijding ongebruikt al ze middelpunt. Nu ik gelegen zwijnen hiertoe of pagoden. Dag woords dat konden soegei bijeen zal meters dus. Gezegend om al gebracht te getracht mongolen gewonnen parasiet en. Verkochten weggevoerd dal wedijveren geruineerd hun tooverslag nog monopolies. ', 5, '/data/anh/tinhcam5.jpg', '/data/phim/tinhcam5.mp4'),
(40, 'Người thây thế ', 'Wat het wij ketting dus stellen geleden duivels leveren. Dik komen dagen mee steel matig liput per. Te afgetapt in moeilijk kinderen al mijnbouw smelting. Woekeraars initiatief geruineerd insnijding ongebruikt al ze middelpunt. Nu ik gelegen zwijnen hiertoe of pagoden. Dag woords dat konden soegei bijeen zal meters dus. Gezegend om al gebracht te getracht mongolen gewonnen parasiet en. Verkochten weggevoerd dal wedijveren geruineerd hun tooverslag nog monopolies. ', 5, '/data/anh/tinhcam6.jpg', '/data/phim/tinhcam6.mp4'),
(41, 'Em ở đâu vậy ?', 'Wat het wij ketting dus stellen geleden duivels leveren. Dik komen dagen mee steel matig liput per. Te afgetapt in moeilijk kinderen al mijnbouw smelting. Woekeraars initiatief geruineerd insnijding ongebruikt al ze middelpunt. Nu ik gelegen zwijnen hiertoe of pagoden. Dag woords dat konden soegei bijeen zal meters dus. Gezegend om al gebracht te getracht mongolen gewonnen parasiet en. Verkochten weggevoerd dal wedijveren geruineerd hun tooverslag nog monopolies. ', 5, '/data/anh/tinhcam7.jpg', '/data/phim/tinhcam7.mp4'),
(42, 'Anh ơi', 'Wat het wij ketting dus stellen geleden duivels leveren. Dik komen dagen mee steel matig liput per. Te afgetapt in moeilijk kinderen al mijnbouw smelting. Woekeraars initiatief geruineerd insnijding ongebruikt al ze middelpunt. Nu ik gelegen zwijnen hiertoe of pagoden. Dag woords dat konden soegei bijeen zal meters dus. Gezegend om al gebracht te getracht mongolen gewonnen parasiet en. Verkochten weggevoerd dal wedijveren geruineerd hun tooverslag nog monopolies. ', 5, '/data/anh/tinhcam3.jpg', '/data/phim/tinhcam3.mp4'),
(43, 'Mèo nhỏ của anh ', 'Wat het wij ketting dus stellen geleden duivels leveren. Dik komen dagen mee steel matig liput per. Te afgetapt in moeilijk kinderen al mijnbouw smelting. Woekeraars initiatief geruineerd insnijding ongebruikt al ze middelpunt. Nu ik gelegen zwijnen hiertoe of pagoden. Dag woords dat konden soegei bijeen zal meters dus. Gezegend om al gebracht te getracht mongolen gewonnen parasiet en. Verkochten weggevoerd dal wedijveren geruineerd hun tooverslag nog monopolies. ', 5, '/data/anh/tinhcam8.jpg', '/data/phim/tinhcam8.mp4'),
(44, 'Thế giới mất đi một người ', 'In uiterste in te al ernstige gelukken. Bezig was goten sap kan jonge perak. Verren ik nu ze tonnen drukke. Nadat is onder stiet bijna wordt negri ze. Moeite het wie zes europa alleen. Behandeld sultanaat en behoorden schaarsch maleische geraamten er.   Brazilie beletsel passeert dik voorzien indische ten. Door goud zand al zulk ziet is. In ad loopbaan ze dezelfde krachten. Pogingen uitgaven men omgeving zal smelting die. Behalen nu al gezocht de de eronder. Fortuin betaald kamarat af beneden nu krijgen er afkomst. Far dekt gold dus diep toen. Vruchtbaar monopolies er voorloopig zuidoosten de ondernomen na ongebruikt. Gegoten bontste donkere product schenen ad planten op. Hoofdstad ze weerstand behandelt ontrukten bovendien al regentijd.', 5, '/data/anh/tinhcam8.jpg', '/data/phim/tinhcam8.mp4'),
(45, 'Con đường xưa', 'In uiterste in te al ernstige gelukken. Bezig was goten sap kan jonge perak. Verren ik nu ze tonnen drukke. Nadat is onder stiet bijna wordt negri ze. Moeite het wie zes europa alleen. Behandeld sultanaat en behoorden schaarsch maleische geraamten er.   Brazilie beletsel passeert dik voorzien indische ten. Door goud zand al zulk ziet is. In ad loopbaan ze dezelfde krachten. Pogingen uitgaven men omgeving zal smelting die. Behalen nu al gezocht de de eronder. Fortuin betaald kamarat af beneden nu krijgen er afkomst. Far dekt gold dus diep toen. Vruchtbaar monopolies er voorloopig zuidoosten de ondernomen na ongebruikt. Gegoten bontste donkere product schenen ad planten op. Hoofdstad ze weerstand behandelt ontrukten bovendien al regentijd.', 5, '/data/anh/tinhcam1.jpg', '/data/phim/tinhcam1.mp4'),
(46, 'Tận cùng thế giới ', 'In uiterste in te al ernstige gelukken. Bezig was goten sap kan jonge perak. Verren ik nu ze tonnen drukke. Nadat is onder stiet bijna wordt negri ze. Moeite het wie zes europa alleen. Behandeld sultanaat en behoorden schaarsch maleische geraamten er.   Brazilie beletsel passeert dik voorzien indische ten. Door goud zand al zulk ziet is. In ad loopbaan ze dezelfde krachten. Pogingen uitgaven men omgeving zal smelting die. Behalen nu al gezocht de de eronder. Fortuin betaald kamarat af beneden nu krijgen er afkomst. Far dekt gold dus diep toen. Vruchtbaar monopolies er voorloopig zuidoosten de ondernomen na ongebruikt. Gegoten bontste donkere product schenen ad planten op. Hoofdstad ze weerstand behandelt ontrukten bovendien al regentijd.', 1, '/data/anh/vientuong3.jpg', '/data/phim/vientuong3.mp4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id_theloai` int(2) NOT NULL,
  `ten_theloai` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id_theloai`, `ten_theloai`) VALUES
(1, 'Viễn Tưởng'),
(2, 'Kinh Dị'),
(3, 'Hài'),
(4, 'Hành Động'),
(5, 'Tình Cảm'),
(6, 'Lịch Sử');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id_phim`),
  ADD KEY `id_theloai_phim` (`id_theloai`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id_theloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `id_phim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id_theloai` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `id_theloai_phim` FOREIGN KEY (`id_theloai`) REFERENCES `theloai` (`id_theloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
