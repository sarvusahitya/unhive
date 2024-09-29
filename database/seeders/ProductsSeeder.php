<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [

            [
                "Phone 1",
                "Nothing Phone (1) - 8GB / 128GB-Black",
                "Nothing",
                "A10400001",
                "85171300",
                "71069TPK493"
            ],
            [
                "Phone 1",
                "Nothing Phone (1) - 8GB / 256GB-Black",
                "Nothing",
                "A10400002",
                "85171300",
                "49334ECX835"
            ],
            [
                "Phone 1",
                "Nothing Phone (1) - 8GB / 256GB-White",
                "Nothing",
                "A10400004",
                "85171300",
                "90474YIT787"
            ],
            [
                "Phone 1",
                "Nothing Phone (1) - 12GB / 256GB-Black",
                "Nothing",
                "A10400003",
                "85171300",
                "82418UZP926"
            ],
            [
                "Phone 1",
                "Nothing Phone (1) - 12GB / 256GB- White",
                "Nothing",
                "A10400005",
                "85171300",
                "14860WXY866"
            ],
            [
                "Phone (2)",
                "Nothing Phone (2) -12GB / 256GB -White",
                "Nothing",
                "A10400038",
                "85171300",
                "85225USS939"
            ],
            [
                "Phone (2)",
                "Nothing Phone (2) -12GB / 256GB - Dark Grey",
                "Nothing",
                "A10400036",
                "85171300",
                "71402ZPG644"
            ],
            [
                "Phone (2)",
                "Nothing Phone (2) -12GB / 512GB -White",
                "Nothing",
                "A10400039",
                "85171300",
                "19399KFV721"
            ],
            [
                "Phone (2)",
                "Nothing Phone (2) -12GB / 512GB - Dark Grey",
                "Nothing",
                "A10400037",
                "85171300",
                "66175IQM650"
            ],
            [
                "Phone 2a",
                "Nothing Phone (2a) - 8GB / 128GB-Black",
                "Nothing",
                "A10400055",
                "85171300",
                "84679MWO774"
            ],
            [
                "Phone 2a",
                "Nothing Phone (2a) - 8GB / 128GB-White",
                "Nothing",
                "A10400045",
                "85171300",
                "69614VAV138"
            ],
            [
                "Phone 2a",
                "Nothing Phone (2a) - 8GB / 128GB-Blue",
                "Nothing",
                "A10400077",
                "85171300",
                "41445XKL333"
            ],
            [
                "Phone 2a",
                "Nothing Phone (2a) - 8GB / 256GB-Black",
                "Nothing",
                "A10400069",
                "85171300",
                "12780RBL395"
            ],
            [
                "Phone 2a",
                "Nothing Phone (2a) - 8GB / 256GB-White",
                "Nothing",
                "A10400070",
                "85171300",
                "78014DMW527"
            ],
            [
                "Phone 2a",
                "Nothing Phone (2a) - 8GB / 256GB-Blue",
                "Nothing",
                "A10400078",
                "85171300",
                "11345LNL391"
            ],
            [
                "Phone 2a",
                "Nothing Phone (2a) 8/256 Special Edition",
                "Nothing",
                "A10400124",
                "85171300",
                "82830XNM274"
            ],
            [
                "Phone 2a",
                "Nothing Phone (2a) - 12GB / 256GB-Black",
                "Nothing",
                "A10400056",
                "85171300",
                "27894YNN924"
            ],
            [
                "Phone 2a",
                "Nothing Phone (2a) - 12GB / 256GB-White",
                "Nothing",
                "A10400058",
                "85171300",
                "46408HRB358"
            ],
            [
                "Phone 2a",
                "Nothing Phone (2a) - 12GB / 256GB-Blue",
                "Nothing",
                "A10400079",
                "85171300",
                "86362QGW515"
            ],
            [
                "Phone 2a",
                "Nothing Phone (2a) 12/256 Special Edition",
                "Nothing",
                "A10400080",
                "85171300",
                "17115NZN768"
            ],
            [
                "Phone (2a) Plus",
                "Nothing Phone (2a) Plus 8/256 Grey",
                "Nothing",
                "A10400086",
                "85171300",
                "28629GIB277"
            ],
            [
                "Phone (2a) Plus",
                "Nothing Phone (2a) Plus 8/256 Black",
                "Nothing",
                "A10400091",
                "85171300",
                "81983NIE703"
            ],
            [
                "Phone (2a) Plus",
                "Nothing Phone (2a) Plus 12/256 Grey",
                "Nothing",
                "A10400093",
                "85171300",
                "63837GKA641"
            ],
            [
                "Phone (2a) Plus",
                "Nothing Phone (2a) Plus 12/256 Black",
                "Nothing",
                "A10400092",
                "85171300",
                "80952DVP968"
            ],
            [
                "CMF Phone 1",
                "CMF Phone 1  6+128GB  Black",
                "Nothing_CMF",
                "A10400116",
                "85171300",
                "57130OPF460"
            ],
            [
                "CMF Phone 1",
                "CMF Phone 1  6+128GB  Light Green",
                "Nothing_CMF",
                "A10400117",
                "85171300",
                "73864JOT169"
            ],
            [
                "CMF Phone 1",
                "CMF Phone 1  6+128GB  Blue",
                "Nothing_CMF",
                "A10400118",
                "85171300",
                "90394JIA278"
            ],
            [
                "CMF Phone 1",
                "CMF Phone 1  6+128GB  Orange",
                "Nothing_CMF",
                "A10400119",
                "85171300",
                "71771OIX395"
            ],
            [
                "CMF Phone 1",
                "CMF Phone 1  8+128GB  Black",
                "Nothing_CMF",
                "A10400120",
                "85171300",
                "12257RIP933"
            ],
            [
                "CMF Phone 1",
                "CMF Phone 1  8+128GB  Light Green",
                "Nothing_CMF",
                "A10400121",
                "85171300",
                "41603XVL436"
            ],
            [
                "CMF Phone 1",
                "CMF Phone 1  8+128GB  Blue",
                "Nothing_CMF",
                "A10400122",
                "85171300",
                "65087ZIT302"
            ],
            [
                "CMF Phone 1",
                "CMF Phone 1  8+128GB  Orange",
                "Nothing_CMF",
                "A10400123",
                "85171300",
                "38792KSJ925"
            ],
            [
                "Ear Stick",
                "Nothing Ear Stick Bluetooth White B157",
                "Nothing",
                "A10600015",
                "85171300",
                "89845WOH349"
            ],
            [
                "45W",
                "Nothing Power (45W) C298",
                "Nothing",
                "A10800004",
                "85044030",
                "90438MVB375"
            ],
            [
                "Ear 2",
                "Nothing Ear 2",
                "Nothing",
                "A10600018",
                "85183090",
                "35213NRT483"
            ],
            [
                "Ear 2",
                "Nothing Ear (2) Black",
                "Nothing",
                "A10600027",
                "85183090",
                "60076OBA572"
            ],
            [
                "Buds Pro",
                "Earbuds_TWS _Dark Grey",
                "Nothing_CMF",
                "A10600030",
                "85183000",
                "90129DLM412"
            ],
            [
                "Buds Pro",
                "Earbuds _TWS _Light Grey",
                "Nothing_CMF",
                "A10600033",
                "85183000",
                "58757DSJ951"
            ],
            [
                "Buds Pro",
                "Earbuds _TWS _Orange",
                "Nothing_CMF",
                "A10600034",
                "85183000",
                "71268XTS700"
            ],
            [
                "Watch Pro",
                "Smartwatch_ Dark Grey",
                "Nothing_CMF",
                "A10700001",
                "85176290",
                "79364SXY636"
            ],
            [
                "Watch Pro",
                "Smartwatch_ Metallic Grey/Orange",
                "Nothing_CMF",
                "A10700005",
                "85176290",
                "91686MET379"
            ],
            [
                "Watch Pro",
                "Smartwatch _Ash Grey",
                "Nothing_CMF",
                "A10700007",
                "85176290",
                "26886QDK931"
            ],
            [
                "Watch Pro",
                "Smartwatch _Silver",
                "Nothing_CMF",
                "A10700002",
                "85176290",
                "59088GTJ822"
            ],
            [
                "65W",
                "GaN Charger_ 65 W GaN_ Dark Grey",
                "Nothing_CMF",
                "A10800007",
                "85044030",
                "65358AKT223"
            ],
            [
                "65W",
                "GaN Charger_ 65 W GaN_ Orange",
                "Nothing_CMF",
                "A10800010",
                "85044030",
                "42475PHN327"
            ],
            [
                "Buds",
                "Buds Dark Grey",
                "Nothing_CMF",
                "A10600054",
                "85183090",
                "87822AOS149"
            ],
            [
                "Buds",
                "Buds Light Grey",
                "Nothing_CMF",
                "A10600056",
                "85183090",
                "52291DUC163"
            ],
            [
                "Buds",
                "Buds Orange",
                "Nothing_CMF",
                "A10600058",
                "85183090",
                "92768MRT514"
            ],
            [
                "Neckband",
                "Neckband Orange",
                "Nothing_CMF",
                "A10600048",
                "85183019",
                "29928EMT364"
            ],
            [
                "Neckband",
                "Neckband Light Grey",
                "Nothing_CMF",
                "A10600049",
                "85183019",
                "54903JLB861"
            ],
            [
                "Neckband",
                "Neckband Dark Grey",
                "Nothing_CMF",
                "A10600050",
                "85183019",
                "78465UQW965"
            ],
            [
                "Ear (a)",
                "Ear (a) Black",
                "Nothing",
                "A10600066",
                "85183090",
                "48962MGQ885"
            ],
            [
                "Ear (a)",
                "Ear (a) White",
                "Nothing",
                "A10600067",
                "85183090",
                "73867VGA425"
            ],
            [
                "Ear (a)",
                "Ear (a) Yellow",
                "Nothing",
                "A10600068",
                "85183090",
                "78539BDA334"
            ],
            [
                "Ear TWS",
                "Ear TWS Black",
                "Nothing",
                "A10600069",
                "85183090",
                "78236DUU704"
            ],
            [
                "Ear TWS",
                "Ear TWS White",
                "Nothing",
                "A10600070",
                "85183090",
                "82369NYS297"
            ],
            [
                "CMF Buds Pro 2",
                "CMF Buds Pro 2  Light Grey",
                "Nothing_CMF",
                "A10600082",
                "85183090",
                "28085IDW114"
            ],
            [
                "CMF Buds Pro 2",
                "CMF Buds Pro 2  Dark Grey",
                "Nothing_CMF",
                "A10600083",
                "85183090",
                "24135VQK142"
            ],
            [
                "CMF Buds Pro 2",
                "CMF Buds Pro 2  orange",
                "Nothing_CMF",
                "A10600081",
                "85183090",
                "37346CFM738"
            ],
            [
                "CMF Buds Pro 2",
                "CMF Buds Pro 2  Blue",
                "Nothing_CMF",
                "A10600080",
                "85183090",
                "48903JSA541"
            ],
            [
                "CMF Watch Pro 2",
                "CMF Watch Pro 2  Dark Grey",
                "Nothing_CMF",
                "A10700009",
                "85176290",
                "98815WIN702"
            ],
            [
                "CMF Watch Pro 2",
                "CMF Watch Pro 2  Ash Grey",
                "Nothing_CMF",
                "A10700011",
                "85176290",
                "86074CYJ911"
            ],
            [
                "CMF Watch Pro 2",
                "CMF Watch Pro 2  Orange",
                "Nothing_CMF",
                "A10700013",
                "85176290",
                "48154SJF102"
            ],
            [
                "CMF Watch Pro 2",
                "CMF Watch Pro 2  Blue",
                "Nothing_CMF",
                "A10700015",
                "85176290",
                "60624UHP602"
            ],
            [
                "33W",
                "Power 33W Fast Charger",
                "Nothing_CMF",
                "A10800011",
                "76169990",
                "51029DCA381"
            ],
            [
                "Accessories",
                "CMF Stand Orange",
                "Nothing_CMF",
                "601700002",
                "39269099",
                "18276YXK730"
            ],
            [
                "Accessories",
                "CMF Phone 1 Case Black",
                "Nothing_CMF",
                "610300005",
                "39269099",
                "98584WXT870"
            ],
            [
                "Accessories",
                "CMF Phone 1 Case Light Green",
                "Nothing_CMF",
                "610300006",
                "39269099",
                "36611MVO550"
            ],
            [
                "Accessories",
                "CMF Phone 1 Case Blue",
                "Nothing_CMF",
                "610300007",
                "39269099",
                "96507GCH493"
            ],
            [
                "Accessories",
                "CMF Phone 1 Case Orange",
                "Nothing_CMF",
                "610300008",
                "39269099",
                "70201LLJ186"
            ]
        ];
        foreach ($arr as &$innerArray) {
            $innerArray = [
                "category_name" => $innerArray[0],
                "product_name" => $innerArray[1],
                "brand_name" => $innerArray[2],
                "product_sku" => $innerArray[3],
                "product_hsn_or_sac" => $innerArray[4],
                "guid"       => $innerArray[5],
            ];
        }

        DB::table('products')->insert($arr);
    }
}
