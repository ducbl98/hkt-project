<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert(
            [
                [
                    'name'=>'HỌC LÀM NGƯỜI TỬ TẾ TRƯỚC, HỌC LÀM KINH DOANH SAU!',
                    'tag'=>'Kinh tế - Phát triển bản thân',
                    'category'=>'Kinh tế',
                    'content'=>'Đọc được cuốn sách hay phản chiếu tư duy từ những doanh nhân triết gia lớn là điều quý giá. Inamori Kazuo, nhà sáng lập tập đoàn Kyocera Group & chủ tịch Japan Airline là một con người như vậy.
                              Sau đây là một vài note nhanh từ tư duy của một doanh nhân-triết gia được tôn kính bậc nhất trong lịch sử kinh doanh của Nhật Bản về cách làm người tử tế
                              1.Chủ động chọn phản ứng với thực tế: Nếu gặp phải khó khăn, đừng chạy trốn, hãy đón nhận bằng cách đối mặt trực diện với nó, và đó chính là hạt giống giúp bạn trưởng thành.
                                Tùy theo cách bạn chọn phản ứng với thực tế, kết quả bạn nhận được có thể là tích cực hay tiêu cực.
                                Nếu chúng ta bị ảnh hưởng bởi những thông tin bên ngoài rằng nền kinh tế đang có chuyển biến xấu và nghĩ “môi trường kinh tế không tốt”, thì chính ta là nguyên nhân khiến việc kinh doanh của công ty trì trệ.
                              2.Nghịch cảnh là cơ hội. Nghịch cảnh là cơ hội để chúng ta nhìn lại mình và giúp ta trưởng thành. Hãy xem nghịch cảnh là cơ hội tốt để lập chí mạnh mẽ, đối mặt với nó một cách dũng cảm.
                                Chính nhờ thử thách mà quyết tâm được tựu thành.
                              3.Những mâu thuẫn của người lãnh đạo: Người đứng đầu công ty phải có được 2 mặt mâu thuẫn thật uyển chuyển: “độc đoán và hòa hợp”, “mạnh và yếu”, “lạnh lùng và nồng ấm”.
                                Nếu chỉ có tinh thần lãnh đạo mạnh mẽ sẽ dẫn đến tình trạng mất kiểm soát, trở nên độc tài. Nếu chỉ có sự khiêm tốn, sẽ thiếu lực kéo để công ty phát triển lớn mạnh. Nếu mạnh mẽ quá sẽ gây phản ứng trong nhân viên, khiêm tốn quá lại khiến nhân viên xem thường.
                                Điều hòa những mâu thuẫn đó và sử dụng nó như thế nào sẽ quyết định thành công hay thất bại của một đời người hay việc kinh doanh của một doanh nghiệp.
                              4.Triết lý bao trùm: Lợi tha = Làm lợi cho người. Chỉ cần mỗi người gọt bớt lòng tham của mình, chịu tổn thất một chút, hay chỉ cần chúng ta dũng cảm nhường chút lợi của mình cho người khác, mọi việc sẽ suôn sẻ, trôi chảy.',
                ],
                [

                    'name'=>'HỌC LÀM NGƯỜI TỬ TẾ TRƯỚC, HỌC LÀM KINH DOANH SAU!',
                    'tag'=>'Kinh tế - Đời sống',
                    'category'=>'Kinh tế',
                    'content'=>'Vừa qua, UBND huyện Bình Chánh đã đề xuất chủ trương thành lập quận và được UBND TP.HCM chấp thuận. Nhiệm kỳ 2020 – 2025, Bình Chánh được đánh giá là hạt nhân trong chiến lược phát triển đô thị vệ tinh khu Tây Sài Gòn, góp phần thúc đẩy tốc độ đô thị hóa, tạo đà cho thị trường địa ốc khu vực này phát triển mạnh mẽ.
                              Trong đó, bất động sản trung tâm hành chính Bình Chánh với dân cư đông, tiện ích công đầy đủ, cơ sở hạ tầng và mạng lưới liên kết đồng bộ, hoàn thiện được xem là tâm điểm tăng trưởng “nóng” và có giá trị gia tăng cao bậc nhất khu vực. Tuy nhiên, hiện chỉ có duy nhất dự án Westgate với quy mô hơn 2000 căn hộ của Tập đoàn BĐS An Gia được triển khai.
                              Từ Westgate, cư dân chỉ mất 3 phút đến tuyến Metro 3A (Bến Thành – Tân Kiên), 5 phút đến chợ đầu mối Bình Điền, Bến xe miền Tây mới, dễ dàng vào Quận 1 theo đại lộ Võ Văn Kiệt hay khu đô thị Phú Mỹ Hưng theo trục đường Nguyễn Văn Linh. Đặc biệt, dự án chỉ cách tuyến xe buýt nhanh đầu tiên của TP.HCM –  BRT số 1 chỉ với 3 phút di chuyển, thuận tiện kết nối Bình Chánh tới trung tâm thành phố và các đô thị vệ tinh.
                              Dự án thừa hưởng công viên ngoại khu 2 ha và sở hữu công viên nội khu 1,9 ha cùng gần 50 tiện ích vượt kỳ vọng trong phân khúc giá tầm trung. Đây cũng là dự án tiên phong triển khai các tiện ích chỉ xuất hiện trong phân khúc cao cấp như an ninh đa lớp, quản lý căn hộ bằng ứng dụng, wifi miễn phí các khu công cộng, hệ thống lọc nước trung tâm tiêu chuẩn toàn cầu NSF,… góp phần nâng tầm chất lượng sống cho những thị dân thông minh đúng nghĩa.'
                ],
                [

                    'name'=>'ĐẾN RÀO CHẮN CŨNG PHẢI THỜI TRANG!',
                    'tag'=>'Kinh tế - Đời sống',
                    'category'=>'Kinh tế',
                    'content'=>'Nhìn những hình ảnh bên dưới, khó mà đoán được đây chỉ là phần hàng rào che chắn cửa hàng đang thi công của Louis Vuitton và Dior. Vài năm về trước, khi cửa hàng ở số 57 Manhattan đi vào sửa chữa, Dior đã thiết kế rào chắn có hình dáng của một chiếc túi Lady Dior khổng lồ.
                              Địa điểm thú vị này nhanh chóng trở thành nơi "check-in" của nhiều người dân, thu hút sự chú ý của đông đảo người qua đường và trên mạng xã hội. Tiếp bước Dior, Louis Vuitton và Goyard cũng đặt những chiếc túi khổng lồ tại các điểm thi công, vừa che chắn được công trình, vừa vô tình tạo nên một chiêu "street marketing" độc đáo.'

                ],
                [
                    'name'=>'PHỤ NỮ MUỐN ĐƯỢC HẠNH PHÚC NHẤT ĐỊNH PHẢI BIẾT ĐIỀU NÀY',
                    'tag'=>'Phụ nữ - Đời sống',
                    'category'=>'Gia đình',
                    'content'=>'Độc lập về kinh tế là điều kiện quan trọng nếu bạn muốn là một người phụ nữ hạnh phúc!!! Tại sao ư?
                              *Đàn ông có thể phản bội bạn, nhưng tiền thì không.
                              *Bạn không thể lúc nào cũng ngửa tay xin tiền chồng để chi trả cho những chi tiêu vụn vặt hàng ngày.
                              *Bạn không thể tự do mua sắm mỹ phẩm đắt tiền, đi spa vào cuối tuần, mua quần áo mới,...
                              *Bạn không thể giúp đỡ cho bố mẹ, anh chị em của mình nếu bạn không tự kiếm được tiền.
                              *Và nếu cuộc hôn nhân của bạn đổ vỡ thì bạn sẽ đối mặt với muôn vàn khó khăn: sinh hoạt phí, tiền nuôi con ăn học, tiền phụng dưỡng cha mẹ,...
                               Là phụ nữ ngoài việc yêu thương bản thân thì cần nỗ lực kiếm tiền để độc lập về kinh tế. Tiền không phải là tất cả, nhưng bạn sẽ không có gì cả nếu không có tiền!!!'
                ],
                [
                    'name'=>'PHỤ NỮ THÔNG MINH KHÔNG BAO GIỜ CHỌN HẠNH PHÚC TẠM BỢ!',
                    'tag'=>'Phụ nữ - Đời sống',
                    'category'=>'Gia đình',
                    'content'=>'Khi bạn chọn hạnh phúc tạm bợ!!!
                              Đừng chọn ai đó làm bến đỗ cho đời mình khi bạn vẫn có cảm giác tạm bợ. Là phụ nữ hiện đại, bạn hãy chắc rằng mình đủ khả năng độc lập về cả đời sống kinh tế lẫn tinh thần. Hãy chỉ xây tổ ấm với người khiến bạn thực sự rung động. Đừng vì sự thiếu thốn về kinh tế hay tình cảm mà lựa chọn "sống tạm bợ".
                              Lối sống tạm bợ không chỉ giết chết thanh xuân mà còn khiến bạn đánh mất chính mình. Người xứng đáng với hạnh phúc là người luôn kiên trì hướng về phía trước - nơi hạnh phúc thật sự đang chờ đón bạn!!!'
                ],
                [
                    'name'=>'Yêu 10 năm, chưa được cưới được vì anh trai của n.y chưa cưới?',
                    'tag'=>'Chuyện trò - Tâm sự',
                    'category'=>'Confession',
                    'content'=>"Mình năm nay 28 tuổi, mình và n.y yêu nhau từ năm 18 tuổi khi 2 đứa năm nhất đến giờ là 10 năm. 1 quãng thời gian rất dài rồi, đáng nhẽ ra giờ mình đã lập gia đình, có thể có cháu rồi nhưng mình và bạn trai vẫn phải chờ…chờ anh trai của bạn trai có n.y rồi cưới thì mình mới đc cưới.
                              Nghe buồn cười thật đúng ko? Nhà n.y mình là dân làm ăn, luôn có tư tưởng là 'Đầu xuôi đuôi lọt' nên cái gì cũng phải có thứ tự trước sau…Chỉ khi nào anh trai n.y có n.y rồi lấy chồng thì mới đến lượt chúng mình cưới. ",
                ],
                [
                    'name'=>'  Cô Ấy Xăm Hình ',
                    'tag'=>'Chuyện trò - Tâm sự',
                    'category'=>'Confession',
                    'content'=>"Nhiều năm trước tôi là một cậu sinh viên năm ba, cũng trải qua vài mối tình nhưng chẳng đâu vào đâu. Hôm ấy chỗ tôi trọ có chuyển tới một em gái làm nghề cắt tóc, nhỏ hơn tôi hai tuổi. Cô bé khá cao ráo, xinh xắn, nhìn qua rất hút mắt.
                              Thế nhưng khi em mặc váy ngắn..."
                ],
                [
                    'name'=>'  EM ĐÀO MỎ ANH VỪA THÔI? ',
                    'tag'=>'Chuyện trò - Tâm sự',
                    'category'=>'Confession',
                    'content'=>"Em năm nay năm 2, anh người yêu hơn em 3 tuổi, tụi em yêu nhau được 2 năm rồi. Tụi em gặp nhau và yêu nhau được 2 tháng, sau thì người yêu em phải đi làm xa nên tụi em đành yêu xa. Trong 2 tháng đầu yêu nhau thì tụi em như bao cặp đôi khác, đi ăn đi chơi, sinh nhật vẫn tặng quà (về cái này thì hầu như là tụi em chia đôi, lần này anh trả thì lần sau em cũng đòi trả, nếu em không trả thì cũng mua gì đó cho anh). Hết 2 tháng thì tụi em yêu xa, 1 năm chỉ gặp nhau được 2-3 lần thôi.
                              Anh ra trường gần 1 năm, đi làm tháng được 8-9 triệu, gần đây do dịch nên chỉ còn tầm 7triệu thôi. Anh đi làm rồi nên anh có nói mỗi tháng anh cho em tiền để chi trả lặt vặt, và tháng anh gửi em 300-400k, đến nay anh gửi em được 5 tháng là 5 lần. Ban đầu em có nói anh khỏi phải gửi vì em cũng có đi làm thêm, thì anh nói coi như em yêu xa chịu nhiều thiệt thòi. Em đồng ý nhận vì nghĩ người yêu cũng đi làm rồi, mà tháng cũng chỉ có 400k nên cũng không ảnh hưởng gì đến lương của anh."

                ],
            ]
        );
    }
}
