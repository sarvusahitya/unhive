<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [

            [
                "3G mobile world",
                "VIRAJPET",
                "Karim",
                "RTL3590",
                "91907HBO596"
            ],
            [
                "9 TO 9 MOBILES",
                "MYSORE",
                "Karim",
                "RTL3472",
                "11859JAV588"
            ],
            [
                "A M ENTERPRISES",
                "BANGALORE",
                "Bhaskar",
                "RTL3151",
                "72724MQW223"
            ],
            [
                "A R MOBILES AND HOME APPLIANCES",
                "BANGALORE",
                "Lakshman",
                "RTL4067",
                "77534NQF750"
            ],
            [
                "A.B.N. COMMUNICATION (CDC)",
                "BANGALORE",
                "Lakshman",
                "RTL1639",
                "70055IWU996"
            ],
            [
                "A.S.ELECTRONICS",
                "DEVANAHALLI",
                "Govind",
                "RTL4013",
                "97728AUS749"
            ],
            [
                "AAI ENTERPRISES",
                "BELLARY",
                "Mujahid",
                "RTL3803",
                "10473JGW332"
            ],
            [
                "AAKANKSHA DISTRIBUTORS PRIVATE LIMITED",
                "BANGALORE",
                "Shreyas",
                "-",
                "79195JZI879"
            ],
            [
                "ACE COMMUNICATION (HEGGANAHALLI CROSS)",
                "BANGALORE",
                "Lakshman",
                "RTL1778",
                "26646AOX930"
            ],
            [
                "ACE COMMUNICATIONS (2)",
                "BANGALORE",
                "Lakshman",
                "RTL3261",
                "78350NHH777"
            ],
            [
                "ADISHWAR INDIA LIMITED",
                "BANGALORE",
                "Shreyas",
                "-",
                "75355COL955"
            ],
            [
                "Aishwarya Mobiles",
                "BANGALORE",
                "Lakshman",
                "RTL3780",
                "42144RGZ764"
            ],
            [
                "AKSHARS TELECOM",
                "BANGALORE",
                "Mohan",
                "RTL1881",
                "50511TGZ671"
            ],
            [
                "ALLIED ELECTRONICS",
                "BELGAUM",
                "Mujahid",
                "RTL2428",
                "40023NQF854"
            ],
            [
                "ALLOLI MOBILE STORE",
                "JEVARGI",
                "Mujahid",
                "RTL4149",
                "81561WNU422"
            ],
            [
                "ALZAIN  THE MOBILE SHOP",
                "MOODBIDRI",
                "Karim",
                "RTL2617",
                "58001WHW212"
            ],
            [
                "AMBIKA ELECTRONICS",
                "BANGALORE",
                "Lakshman",
                "RTL4113",
                "32833WKO543"
            ],
            [
                "AMBIKA MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL3548",
                "46577GBJ314"
            ],
            [
                "ANAND MOBILES AND BANKERS",
                "MYSORE",
                "Karim",
                "RTL2625",
                "39255RAR802"
            ],
            [
                "ANU MOBILES",
                "TUMKUR",
                "Karim",
                "RTL3528",
                "73737ZMA689"
            ],
            [
                "APOORVA MOBILE HOUSE",
                "BANGALORE",
                "Lakshman",
                "RTL1883",
                "27309BSV179"
            ],
            [
                "APOORVA MOBILE KART",
                "BANGALORE",
                "Lakshman",
                "RTL1884",
                "23091ZCF249"
            ],
            [
                "APOORVA MOBILE KART LAGGERE",
                "BANGALORE",
                "Lakshman",
                "RTL2667",
                "82327DEZ915"
            ],
            [
                "Apoorva Mobiles (Mysore)",
                "MYSORE",
                "Karim",
                "RTL4088",
                "63324DOD818"
            ],
            [
                "APOORVA MOBILES (RAJAJINAGAR)",
                "BANGALORE",
                "Lakshman",
                "RTL2315",
                "18262EKE752"
            ],
            [
                "APPAJI MOBILES (CDC)",
                "BANGALORE",
                "Lakshman",
                "RTL3055",
                "36889EJE750"
            ],
            [
                "ARIHANT TELECOM (CDC)",
                "BANGALORE",
                "Mohan",
                "RTL2429",
                "69585ZBW283"
            ],
            [
                "ARIHANTH ELECTRONICS",
                "MYSORE",
                "Karim",
                "RTL2629",
                "94175HGT930"
            ],
            [
                "ARJUN TELECOM",
                "BANGALORE",
                "Bhaskar",
                "RTL3639",
                "66188OBJ455"
            ],
            [
                "ASHOK SALES INTERNATIONAL",
                "MYSORE",
                "Karim",
                "RTL2623",
                "50209JVO666"
            ],
            [
                "AXIS",
                "BANGALORE",
                "Bhaskar",
                "RTL1885",
                "17150DTW895"
            ],
            [
                "B.T.M.SHOPPEE",
                "BANGALORE",
                "Mohan",
                "RTL3088",
                "28126CFQ165"
            ],
            [
                "Balaji Communications",
                "BANGALORE",
                "Mohan",
                "RTL3484",
                "62476VMO277"
            ],
            [
                "BALAJI COMMUNICATIONS (ANAVATTI)",
                "SHIMOGA",
                "Diviraj",
                "RTL4083",
                "51007UMQ696"
            ],
            [
                "BALAJI ENTERPRISES",
                "BANGALORE",
                "Mohan",
                "RTL2430",
                "29778UOZ835"
            ],
            [
                "BALLAL MOBILES",
                "UDUPI",
                "Diviraj",
                "RTL1886",
                "47703HJI677"
            ],
            [
                "BANGALORE ONLINE SHOPPING",
                "BANGALORE",
                "Lakshman",
                "RTL2431",
                "55237JNA552"
            ],
            [
                "BASAVESHWARA ENTERPRISES",
                "BANGALORE",
                "Lakshman",
                "RTL1887",
                "40753ECK769"
            ],
            [
                "BHANDARI MOBILES",
                "HAVERI",
                "Diviraj",
                "RTL3483",
                "51639QJS746"
            ],
            [
                "BHOOMIKA MOBILES",
                "DHARWAD",
                "Diviraj",
                "RTL4146",
                "84730CSY814"
            ],
            [
                "BOMBAY SALES INTERNATAIONAL",
                "MYSORE",
                "Karim",
                "RTL3025",
                "16046GUP971"
            ],
            [
                "C V MOBILES",
                "BANGALORE",
                "Govind",
                "RTL1888",
                "70763QKX408"
            ],
            [
                "CELL COMMUNICATIONS (Cash And Carry)",
                "BANGALORE",
                "Lakshman",
                "RTL1889",
                "62661CLA940"
            ],
            [
                "CELL SOLUTIONS",
                "SHIMOGA",
                "Diviraj",
                "RTL3630",
                "69920MOS627"
            ],
            [
                "CELL ZONE",
                "KODAGU",
                "Karim",
                "RTL3024",
                "13221OWD931"
            ],
            [
                "CELLOVERSE (RTGS)",
                "BANGALORE",
                "Mohan",
                "RTL3493",
                "41675AJP495"
            ],
            [
                "CELLTECH MOBILES",
                "SHIMOGA",
                "Diviraj",
                "RTL3524",
                "34958EKB223"
            ],
            [
                "CELLULAR COMMUNICATION",
                "NAGAMANGALA",
                "Karim",
                "RTL3505",
                "39034VMC996"
            ],
            [
                "CELLULAR POINT",
                "TUMKUR",
                "Shreyas",
                "RTL1891",
                "30766PVP604"
            ],
            [
                "CHAMUNDA MOBILE",
                "BANGALORE",
                "Bhaskar",
                "RTL3984",
                "13948VOD617"
            ],
            [
                "CHANNEL-9 (OLD)",
                "BANGALORE",
                "Mohan",
                "RTL1899",
                "85091PCX422"
            ],
            [
                "CHARISMA",
                "BANGALORE",
                "Bhaskar",
                "RTL1949",
                "53424WUF718"
            ],
            [
                "CHILUKUR CELLULARS",
                "BELLARY",
                "Mujahid",
                "RTL4144",
                "53534YQG781"
            ],
            [
                "CHOUDHARY MOBILES",
                "BANGALORE",
                "Bhaskar",
                "RTL1900",
                "90951LRN700"
            ],
            [
                "CITY MOBILE (DHARWAD)",
                "DHARWAD",
                "Diviraj",
                "RTL4095",
                "41931DXW800"
            ],
            [
                "CITY MOBILES",
                "BANGALORE",
                "Mohan",
                "RTL3028",
                "30317YXE281"
            ],
            [
                "CL TECH",
                "HUBLI",
                "Diviraj",
                "RTL4079",
                "38311IWN469"
            ],
            [
                "COLORS MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL1895",
                "20140ARW214"
            ],
            [
                "COLOURFULL MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL3468",
                "36753NBV914"
            ],
            [
                "COPPER N FAITH",
                "BELLARY",
                "Mujahid",
                "RTL3453",
                "11079NYU475"
            ],
            [
                "DELITE TELECOM",
                "BANGALORE",
                "Lakshman",
                "RTL1901",
                "57566RQM625"
            ],
            [
                "DHANALAKSHMI  MOBILES  & ELECTRONICS",
                "BANGALORE",
                "Lakshman",
                "RTL1950",
                "82109NZP549"
            ],
            [
                "DHANLAKSHMI COMMUNICATIONS (CDC)",
                "BANGALORE",
                "Mohan",
                "RTL1924",
                "81835EQN860"
            ],
            [
                "DHANLAXMI COMMUNICATION",
                "BANGALORE",
                "Bhaskar",
                "RTL3796",
                "53844WXO607"
            ],
            [
                "DHANLAXMI ENTERPRISES",
                "BANGALORE",
                "Govind",
                "RTL1930",
                "87388JNP885"
            ],
            [
                "DIGITAL HOME",
                "BANGALORE",
                "Lakshman",
                "RTL3469",
                "31845IWP343"
            ],
            [
                "DIGITAL SPACE",
                "BELLARY",
                "Mujahid",
                "RTL3624",
                "76309MEM619"
            ],
            [
                "DIGITAL WINGS",
                "BANGALORE",
                "Lakshman",
                "RTL3607",
                "50402KUU792"
            ],
            [
                "DIMPU MOBILES",
                "MYSORE",
                "Karim",
                "RTL3092",
                "33783INJ930"
            ],
            [
                "DIVYA HOME APPLIANCES AND MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL1904",
                "91454YHA797"
            ],
            [
                "DIVYAS",
                "BANGALORE",
                "Lakshman",
                "RTL2614",
                "23309GJJ413"
            ],
            [
                "DJ GIFT COLLECTIONS",
                "BANGALORE",
                "Bhaskar",
                "RTL3148",
                "96023ADJ244"
            ],
            [
                "DREAM MOBILES",
                "BANGALORE",
                "Govind",
                "RTL3026",
                "51936VIC221"
            ],
            [
                "EESHA COMMUNICATION",
                "SHIMOGA",
                "Diviraj",
                "RTL3907",
                "88808KCO162"
            ],
            [
                "ELITE MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL1897",
                "30534GOT597"
            ],
            [
                "Eshwar mobiles",
                "BANGALORE",
                "Bhaskar",
                "RTL1928",
                "55030DAR781"
            ],
            [
                "FAIR N FAME ANX",
                "BANGALORE",
                "Shreyas",
                "RTL4112",
                "91294XPW326"
            ],
            [
                "FILM CENTRE AND ELECTRONICS",
                "SHIMOGA",
                "Diviraj",
                "RTL3777",
                "32061SLV558"
            ],
            [
                "FLY kING COMMUNICATIONS.",
                "SHIMOGA",
                "Diviraj",
                "RTL3872",
                "87272TUO727"
            ],
            [
                "FONO BAZAAR",
                "BANGALORE",
                "Mohan",
                "RTL1947",
                "44311LYM110"
            ],
            [
                "FONOWALA",
                "MYSORE",
                "Karim",
                "RTL2878",
                "35390MIL673"
            ],
            [
                "FREEDOM MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL4102",
                "75860FZB358"
            ],
            [
                "FRIENDLY MOBILES",
                "MYSORE",
                "Karim",
                "RTL3471",
                "34631SED465"
            ],
            [
                "FRIENDS CHOICE",
                "BANGALORE",
                "Lakshman",
                "RTL3056",
                "91760GYH687"
            ],
            [
                "GAJANANA ENTERPRISES (Opp. Divya)",
                "BANGALORE",
                "Lakshman",
                "RTL2618",
                "59208YBH812"
            ],
            [
                "GAJMUKH COMMUNICATION",
                "BANGALORE",
                "Bhaskar",
                "RTL3193",
                "41169WHF619"
            ],
            [
                "GALAXY MOBILES",
                "BANGALORE",
                "Mohan",
                "RTL3536",
                "32285JIA733"
            ],
            [
                "GALAXY PHONE MANE",
                "BANGALORE",
                "Lakshman",
                "RTL3155",
                "86621JEA671"
            ],
            [
                "GANESH MOBILES",
                "GULBARGA",
                "Mujahid",
                "RTL4105",
                "28575ROV862"
            ],
            [
                "GIRI TELECOM",
                "BANGALORE",
                "Govind",
                "RTL2501",
                "27122PNZ143"
            ],
            [
                "GOSALA ENTERPRISES",
                "TUMKUR",
                "Karim",
                "RTL4045",
                "94361YHJ287"
            ],
            [
                "GUPTAS SHOPPE",
                "DAVANGERE",
                "Diviraj",
                "RTL2664",
                "64125AYP442"
            ],
            [
                "Gurudev telecom",
                "BANGALORE",
                "Bhaskar",
                "RTL1907",
                "65566LAG587"
            ],
            [
                "H B DISTRIBUTOR",
                "CHAMRAJNAGAR",
                "Karim",
                "RTL2651",
                "60053MSA501"
            ],
            [
                "HALEEMA ENTERPRISES",
                "SHIMOGA",
                "Diviraj",
                "RTL3525",
                "39258YBD334"
            ],
            [
                "HAMPI MOBILES (CDC)",
                "KOPPAL",
                "Mujahid",
                "RTL4053",
                "87441KBT287"
            ],
            [
                "Hanuman Telecom - Electronic City post",
                "BANGALORE",
                "Mohan",
                "RTL3481",
                "11242KEI534"
            ],
            [
                "HANUMAN TELECOM (DASARAHALLI)",
                "BANGALORE",
                "Bhaskar",
                "RTL4068",
                "41953KSV665"
            ],
            [
                "HANUMAN TELECOMS",
                "BANGALORE",
                "Lakshman",
                "RTL1958",
                "13180TCH478"
            ],
            [
                "HARMONY PHONES",
                "KODAGU",
                "",
                "RTL3529",
                "35986UCS796"
            ],
            [
                "Hira Electronics",
                "BANGALORE",
                "Lakshman",
                "RTL1919",
                "82126UTF353"
            ],
            [
                "HUSSAINS CELL POINT",
                "MYSORE",
                "Karim",
                "RTL2957",
                "57996ESW938"
            ],
            [
                "I PIK MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL1922",
                "24916ELQ322"
            ],
            [
                "I PLAN TELECOM",
                "BANGALORE",
                "Govind",
                "RTL5556",
                "50398LFM684"
            ],
            [
                "I STORE",
                "KODAGU",
                "Karim",
                "RTL2959",
                "89811WIO585"
            ],
            [
                "I support",
                "BANGALORE",
                "Bhaskar",
                "RTL3511",
                "60464VKC999"
            ],
            [
                "INDIAN MOBILE STORE (RTGS)",
                "BANGALORE",
                "Govind",
                "RTL1951",
                "70021SVN777"
            ],
            [
                "INFINITY MOBILES",
                "BANGALORE",
                "Bhaskar",
                "RTL3504",
                "61127PXA660"
            ],
            [
                "JAI GURUDEV ELECTRONICS",
                "BANGALORE",
                "Bhaskar",
                "RTL3531",
                "63810TBH562"
            ],
            [
                "JAIN ELECTRONICS",
                "BANGALORE",
                "Govind",
                "RTL2286",
                "34442UXX328"
            ],
            [
                "JANANI MOBILES",
                "BELLARY",
                "Mujahid",
                "-",
                "75950GSW494"
            ],
            [
                "JANNA  ENTERPRISES",
                "UTTAR KANNADA",
                "Karim",
                "RTL2852",
                "19491KWA268"
            ],
            [
                "JAY LAKSHMI TELECOM",
                "BANGALORE",
                "Bhaskar",
                "RTL3490",
                "16337HTH735"
            ],
            [
                "JISHU INDIA ELECTRONICS PVT LTD",
                "ANDHERI EAST",
                "Shreyas",
                "-",
                "38967DBG113"
            ],
            [
                "K.V.S.AGENCIES",
                "BANGALORE",
                "Govind",
                "RTL1952",
                "65910RCF445"
            ],
            [
                "KALAVALA ENTERPRISES",
                "KADUR",
                "Karim",
                "RTL3927",
                "87308CON746"
            ],
            [
                "KARAN & CO",
                "CHICKMAGALUR",
                "Karim",
                "RTL3547",
                "84086PLM617"
            ],
            [
                "KARNATAKA WATCH POINT",
                "KOLAR",
                "Shreyas",
                "RTL3925",
                "35954UVO893"
            ],
            [
                "KARNIKA DIGITAL WORLD",
                "CHAMRAJNAGAR",
                "Karim",
                "RTL2958",
                "38255LWL500"
            ],
            [
                "KHETESHWAR TELECOM & ELECTRONIC",
                "BANGALORE",
                "Bhaskar",
                "RTL3500",
                "43724RQZ312"
            ],
            [
                "KING TELECOM",
                "BANGALORE",
                "Bhaskar",
                "RTL3492",
                "66256FQO126"
            ],
            [
                "KRISHNA MOBILE",
                "BANGALORE",
                "Bhaskar",
                "RTL3638",
                "98206NRD426"
            ],
            [
                "KRISHNA MOBILE,ELECTRONICS AND HOME APPLIANCES (KUSHLNAGAR)",
                "KODAGU",
                "Karim",
                "RTL3501",
                "50054HLU281"
            ],
            [
                "KRISHNA TELECOM",
                "BANGALORE",
                "Lakshman",
                "RTL1898",
                "75778LOQ390"
            ],
            [
                "LIKHITHA ENTERPRISES",
                "BANGALORE",
                "Mohan",
                "RTL2628",
                "70081BLV437"
            ],
            [
                "LIMRA MOBILE ZONE",
                "BELLARY",
                "Mujahid",
                "RTL3970",
                "87050RIZ941"
            ],
            [
                "LOGAS TECHNOLOGIES",
                "CHENNAI",
                "Shreyas",
                "-",
                "98168KZW991"
            ],
            [
                "LULU INTERNATIONAL SHOPPING MALLS PRIVATE LIMITED",
                "BANGALORE",
                "Shreyas",
                "RTL3175",
                "42354JPL672"
            ],
            [
                "M M S MOBILE EXPERT",
                "BANGALORE",
                "Mohan",
                "RTL2288",
                "54937RFQ927"
            ],
            [
                "M R S ENTERPRISES",
                "BANGALORE",
                "Shreyas",
                "",
                "59720KRD687"
            ],
            [
                "M S COMMUNICATIONS",
                "BANGALORE",
                "Govind",
                "RTL2504",
                "28589ERB988"
            ],
            [
                "M S ENTERPRISES",
                "BANGALORE",
                "Lakshman",
                "RTL1954",
                "49703SJD790"
            ],
            [
                "M S TELECOM",
                "MYSORE",
                "Karim",
                "RTL2961",
                "23713OIF553"
            ],
            [
                "KUNDAN MOBILE POINT",
                "BANGALORE",
                "Lakshman",
                "RTL1955",
                "46554ZHD216"
            ],
            [
                "MOBILE PALACE - FARANGIPATE",
                "BANTWAL",
                "Diviraj",
                "RTL1935",
                "75135TVT139"
            ],
            [
                "BALAJI TELECOMS (NANDINI LAYOUT)",
                "BANGALORE",
                "Lakshman",
                "RTL1957",
                "60499WKF629"
            ],
            [
                "MADHU ELECTRONICS AND MOBILES",
                "CHINTAMANI",
                "Shreyas",
                "RTL1911",
                "45593IFR859"
            ],
            [
                "MADHUBHAN MOBILES",
                "SHIMOGA",
                "Diviraj",
                "RTL3976",
                "58188LHJ364"
            ],
            [
                "MAHADEV MOBILE (SAHAKARNAGAR)",
                "BANGALORE",
                "Bhaskar",
                "RTL3678",
                "31638JMK729"
            ],
            [
                "MAHADEV MOBILES (BOMMANAHALLI)",
                "BANGALORE",
                "Bhaskar",
                "RTL3843",
                "77500VPE197"
            ],
            [
                "MAHADEV TELECOM",
                "BANGALORE",
                "Mohan",
                "RTL2290",
                "17630NRD697"
            ],
            [
                "MAHALAKSHMI ELECTRONICS",
                "BANGALORE",
                "Bhaskar",
                "RTL8083",
                "53534KDL583"
            ],
            [
                "Mahalakshmi Enterprises",
                "BANGALORE",
                "Bhaskar",
                "-",
                "27705DLP633"
            ],
            [
                "MAHALAKSHMI MOBILE POINT",
                "BANGALORE",
                "Lakshman",
                "RTL4101",
                "77318OMO851"
            ],
            [
                "MAHALAKSHMI MOBILES (J.J. NAGAR)",
                "BANGALORE",
                "Mohan",
                "RTL1921",
                "23568BGX378"
            ],
            [
                "MAHALAKSHMI MOBILES (RAJAJINAGAR)",
                "BANGALORE",
                "Lakshman",
                "RTL1896",
                "70112ATJ110"
            ],
            [
                "MAHALAKSHMI TELECOM",
                "BANGALORE",
                "Lakshman",
                "RTL3615",
                "46844KSD323"
            ],
            [
                "MAHALAXMI MOBILES (T DASARAHALLI)",
                "BANGALORE",
                "Lakshman",
                "RTL2432",
                "39542TNH136"
            ],
            [
                "MAHATHI TECHNOLOGIES  (INACTIVE)",
                "BANGALORE",
                "Mohan",
                "RTL3641",
                "87243TCR697"
            ],
            [
                "MAHAVEER COMMUNICATION",
                "BANGALORE",
                "Bhaskar",
                "RTL4161",
                "89439AFA686"
            ],
            [
                "MAHAVEER MARKETING",
                "BANGALORE",
                "Bhaskar",
                "-",
                "27268QWC194"
            ],
            [
                "MAHAVEER MOBILE ACCESSORIES",
                "DAVANGERE",
                "Diviraj",
                "RTL3952",
                "81487IEH924"
            ],
            [
                "MAHAVEER MOBILES (Do not use)",
                "BIJAPUR",
                "Mujahid",
                "RTL3627",
                "64570PLZ980"
            ],
            [
                "MAHAVEER TELECOM (KAMMANAHALLI)",
                "BANGALORE",
                "Govind",
                "RTL3502",
                "91690IPK234"
            ],
            [
                "MAI MOBILE SHOPEE",
                "MYSORE",
                "Karim",
                "RTL3017",
                "70051LXS513"
            ],
            [
                "MALIK MOBILES",
                "MYSORE",
                "Karim",
                "RTL2960",
                "39225ASS560"
            ],
            [
                "MANJUNATHA COMMUNICATION",
                "CHICKBALLAPUR",
                "Shreyas",
                "RTL3497",
                "72655ZUH485"
            ],
            [
                "MANMANDIR",
                "BIJAPUR",
                "Mujahid",
                "RTL3452",
                "85538JPG571"
            ],
            [
                "MANOHAR  ENTERPRISES",
                "BANGALORE",
                "Lakshman",
                "RTL2955",
                "36464SFC957"
            ],
            [
                "MANOJ MEDIA N. JEWELS",
                "BANGALORE",
                "Bhaskar",
                "RTL3224",
                "71219FXM603"
            ],
            [
                "MANORAMA TELELINKS",
                "BANGALORE",
                "Bhaskar",
                "RTL1903",
                "26855ODN115"
            ],
            [
                "MANU TELE SHOPPE",
                "TUMKUR",
                "Karim",
                "RTL3865",
                "21226OXS222"
            ],
            [
                "MANVITH ENTERPRISES",
                "BANGALORE",
                "Lakshman",
                "RTL3626",
                "96284XJM184"
            ],
            [
                "MARUTHI INFOTECH",
                "MYSORE",
                "Karim",
                "RTL2499",
                "91860WNC742"
            ],
            [
                "MARUTHI MOBILE ZONE",
                "BANGALORE",
                "Lakshman",
                "RTL1910",
                "26750AOO796"
            ],
            [
                "Maruthi mobiles",
                "BANGALORE",
                "Bhaskar",
                "RTL3491",
                "47269WSL966"
            ],
            [
                "MARUTHI TELECOM",
                "BANGALORE",
                "Govind",
                "RTL4084",
                "41658OCS398"
            ],
            [
                "MAXCELL TELECOM",
                "BANGALORE",
                "Govind",
                "RTL2433",
                "18526YIS566"
            ],
            [
                "MAYA   WORLD",
                "BANGALORE",
                "Bhaskar",
                "RTL4086",
                "69932SMT119"
            ],
            [
                "MAYA ELECTRONICS (CDC)",
                "BANGALORE",
                "Bhaskar",
                "RTL4323",
                "33929SOZ762"
            ],
            [
                "MAYUR MOBILE",
                "BANGALORE",
                "Bhaskar",
                "RTL3174",
                "76703NRC206"
            ],
            [
                "MAYUR TELESYSTEMS",
                "BANGALORE",
                "Bhaskar",
                "RTL3677",
                "87368TZR474"
            ],
            [
                "MEGA MOBILES",
                "SHIMOGA",
                "Diviraj",
                "RTL3518",
                "28261ANN899"
            ],
            [
                "MEGHA ACCESSORIES PRIVATE LIMITED (INACTIVE)",
                "MYSORE",
                "Karim",
                "RTL2630",
                "49579HMH151"
            ],
            [
                "MEHTA ENTERPRISES",
                "BANGALORE",
                "Govind",
                "RTL3091",
                "71411SMB530"
            ],
            [
                "METRO ELECTRONIC WORLD",
                "BANGALORE",
                "Bhaskar",
                "RTL3489",
                "39971RZD495"
            ],
            [
                "MOBI IMPEX",
                "HYDERABAD",
                "Shreyas",
                "-",
                "84806DBY212"
            ],
            [
                "MOBI TEL",
                "BANGALORE",
                "Lakshman",
                "RTL1960",
                "99456SDD973"
            ],
            [
                "MOBILE ARAAMANE (CDC)",
                "BANGALORE",
                "Lakshman",
                "RTL3856",
                "69689FHH654"
            ],
            [
                "Mobile Arena (CDC)",
                "BANGALORE",
                "Lakshman",
                "RTL1893",
                "55267SEN830"
            ],
            [
                "MOBILE CAFE",
                "BANGALORE",
                "Govind",
                "RTL2291",
                "61075NOU793"
            ],
            [
                "MOBILE CAMPUS (DO NOT BILL)",
                "GULBARGA",
                "Mujahid",
                "RTL4099",
                "69881LJQ575"
            ],
            [
                "MOBILE CARE",
                "MANGALORE",
                "Karim",
                "RTL2435",
                "25347LED274"
            ],
            [
                "MOBILE GALLERIA",
                "BANGALORE",
                "Govind",
                "RTL3713",
                "48628RNZ596"
            ],
            [
                "Mobile Mania",
                "BELLARY",
                "Shreyas",
                "RTL1906",
                "13305DCA216"
            ],
            [
                "MOBILE MANTRA",
                "BANGALORE",
                "Bhaskar",
                "RTL4031",
                "15050HUN852"
            ],
            [
                "MOBILE MANTRA (BELGAUM)",
                "BELGAUM",
                "Mujahid",
                "RTL4109",
                "26732NAG111"
            ],
            [
                "MOBILE MART",
                "BANGALORE",
                "Lakshman",
                "RTL3470",
                "62916DUI397"
            ],
            [
                "MOBILE NEST",
                "CHINTAMANI",
                "Shreyas",
                "RTL3933",
                "13601JFT175"
            ],
            [
                "MOBILE PARK",
                "VIRAJPET",
                "Karim",
                "RTL3512",
                "97708BHB694"
            ],
            [
                "Mobile planet",
                "SHIMOGA",
                "Diviraj",
                "RTL3515",
                "70348DZZ992"
            ],
            [
                "MOBILE POINT",
                "BANGALORE",
                "Mohan",
                "RTL1909",
                "74476FXE345"
            ],
            [
                "MOBILE SHOPPE",
                "MYSORE",
                "Karim",
                "RTL2500",
                "86540NOV782"
            ],
            [
                "MOBILE X",
                "UDUPI",
                "Mohan",
                "RTL1961",
                "89624KTF280"
            ],
            [
                "MOBILES VATIKA",
                "BANGALORE",
                "Bhaskar",
                "RTL2436",
                "26273EBZ556"
            ],
            [
                "MOBILIZE TELECOM LLP (Do Not Bill)",
                "BANGALORE",
                "Mohan",
                "RTL3776",
                "90489OFW189"
            ],
            [
                "MUCHMORE MOBILESHOPPE",
                "BELLARY",
                "Mujahid",
                "RTL3990",
                "54445WZM229"
            ],
            [
                "MY MOBILE PLAZA",
                "MYSORE",
                "Karim",
                "RTL3153",
                "82688THU831"
            ],
            [
                "My mobiles",
                "BANGALORE",
                "Mohan",
                "RTL1946",
                "43469TLH427"
            ],
            [
                "NAGARAJA ENTERPRISES (CDC)",
                "TUMKUR",
                "Karim",
                "RTL3864",
                "32958PHL114"
            ],
            [
                "NAKODA CELL ZONE",
                "BANGALORE",
                "Bhaskar",
                "RTL4012",
                "35017WQC441"
            ],
            [
                "NATIONAL TELECOM",
                "BANGALORE",
                "Lakshman",
                "RTL3089",
                "26635ONW549"
            ],
            [
                "Navkar mobiles",
                "BANGALORE",
                "Mohan",
                "RTL3482",
                "81180QEB905"
            ],
            [
                "NEMAS MOBILES & COMPUTER WORLD",
                "BANGALORE",
                "Lakshman",
                "RTL4085",
                "68670GSF105"
            ],
            [
                "NEW AADIL MOBILES",
                "LINGSUGUR",
                "Mujahid",
                "RTL4049",
                "43226LFV122"
            ],
            [
                "NEW ARIHANTH MOBILES",
                "MYSORE",
                "Karim",
                "RTL2626",
                "24918XNA801"
            ],
            [
                "NEW CELLZONE",
                "PUTTUR",
                "Karim",
                "RTL3057",
                "13509XTO998"
            ],
            [
                "NEW V.A. ELECTRONICS (CDC)",
                "GANGAVATHI",
                "Shreyas",
                "RTL1962",
                "83924JKN818"
            ],
            [
                "NEXT TELECOM",
                "BANGALORE",
                "Bhaskar",
                "RTL3972",
                "35461FFI820"
            ],
            [
                "NIKHIL TELECOM",
                "BANGALORE",
                "Bhaskar",
                "RTL3440",
                "56117GRY209"
            ],
            [
                "NINZA TELECOM",
                "BANGALORE",
                "Shreyas",
                "RTL4104",
                "18010PCI249"
            ],
            [
                "OM MAHALAKSHMI COLLECTION (CDC)",
                "BANGALORE",
                "Shreyas",
                "RTL1905",
                "17536SHY587"
            ],
            [
                "OM SHAKTHI TELECOM",
                "BANGALORE",
                "Lakshman",
                "RTL1927",
                "77789UKF103"
            ],
            [
                "OMKAR MOBILES",
                "GANGAVATHI",
                "Mujahid",
                "RTL4030",
                "84355QUI529"
            ],
            [
                "ORKUT MOBILE",
                "SULLIA",
                "Diviraj",
                "RTL3798",
                "35632KJB946"
            ],
            [
                "Paras mobile world (Do not bill)",
                "BANGALORE",
                "Mohan",
                "RTL1917",
                "45696UJG492"
            ],
            [
                "PATEL DISTRIBUTORS",
                "BANGALORE",
                "Govind",
                "RTL3855",
                "61875MWC977"
            ],
            [
                "PAWANPUTRA ELECTRONIC",
                "BANGALORE",
                "Bhaskar",
                "RTL1959",
                "18708TGF642"
            ],
            [
                "PHONORANGE PRIVATE LIMITED",
                "BANGALORE",
                "Mohan",
                "RTL2289",
                "38727FKS606"
            ],
            [
                "PLANET G",
                "MANGALORE",
                "Karim",
                "RTL2437",
                "67602YOP888"
            ],
            [
                "POOJA COMMUNICATION",
                "DAVANGERE",
                "Diviraj",
                "RTL3863",
                "71620RRB827"
            ],
            [
                "PRABHA COMMUNICATION",
                "MYSORE",
                "Karim",
                "RTL3513",
                "68319EVQ769"
            ],
            [
                "PRABHA JEWELLERS  BANKERS",
                "MYSORE",
                "Karim",
                "RTL3513",
                "35972BWB105"
            ],
            [
                "Pragathi enterprises",
                "BANGALORE",
                "Bhaskar",
                "RTL3480",
                "41469NCR479"
            ],
            [
                "PRAKASH RETAIL PRIVATE LIMITED",
                "UDUPI",
                "Shreyas",
                "RTL1963",
                "90880CLO751"
            ],
            [
                "PRAVEEN ELECTRONICS",
                "BELGAUM",
                "Mujahid",
                "RTL4145",
                "47028ZMZ114"
            ],
            [
                "PRAVEEN WATCH WORKS AND MOBILE ZONE",
                "CHICKMAGALUR",
                "",
                "RTL3527",
                "78039HHP984"
            ],
            [
                "PREETHI ENTERPRISES",
                "UDUPI",
                "Diviraj",
                "RTL1916",
                "76514OFO863"
            ],
            [
                "Prem Telecom",
                "BANGALORE",
                "Lakshman",
                "RTL1902",
                "57751GSJ456"
            ],
            [
                "PRIYA MOBILES (CDC/PDC)",
                "BANGALORE",
                "Bhaskar",
                "RTL3149",
                "18714LAP300"
            ],
            [
                "PRK MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL3486",
                "65618GPW986"
            ],
            [
                "PROFESSIONAL MOBILES (Ajananagar)",
                "BANGALORE",
                "Lakshman",
                "RTL3698",
                "77784VLY787"
            ],
            [
                "PROFESSIONAL MOBILES (MUNESHWARA BLOCK)",
                "BANGALORE",
                "Mohan",
                "RTL2438",
                "33878EOH838"
            ],
            [
                "PROFESSIONAL TELE SHOPPEE",
                "BANGALORE",
                "Lakshman",
                "RTL2292",
                "32262IIO261"
            ],
            [
                "PROFESSIONAL TELECOM",
                "BANGALORE",
                "Bhaskar",
                "RTL4103",
                "52011OSP926"
            ],
            [
                "PUNITH ENTERPRISES",
                "BANGALORE",
                "Govind",
                "RTL1956",
                "17356XUF843"
            ],
            [
                "PUNYAKOTI ENTERPRISES",
                "BANGALORE",
                "Mohan",
                "RTL2627",
                "57936PCT317"
            ],
            [
                "PUSHPA TELELINKS",
                "BANGALORE",
                "Mohan",
                "RTL3257",
                "43062OGB652"
            ],
            [
                "PUSHPAK TRADING CO",
                "BANGALORE",
                "Bhaskar",
                "RTL2293",
                "15901UHS454"
            ],
            [
                "RAGHU MOBILE SHOPEE",
                "BELLARY",
                "Mujahid",
                "RTL3981",
                "57294PAZ463"
            ],
            [
                "RAHUL MOBILE",
                "MYSORE",
                "Karim",
                "RTL2439",
                "91071VPG126"
            ],
            [
                "RAJ MOBILE POINT",
                "BANGALORE",
                "Lakshman",
                "RTL1915",
                "36302FUT606"
            ],
            [
                "RAJDEEP ENTERPRISES",
                "BANGALORE",
                "Bhaskar",
                "RTL3494",
                "56136XNC370"
            ],
            [
                "RAMDEV ELECTRONIC & COMMUNICATIONS",
                "BANGALORE",
                "Lakshman",
                "RTL2440",
                "87060QXD644"
            ],
            [
                "RAMDEV ENTERPRISES (HOODI CIRCLE)",
                "BANGALORE",
                "Govind",
                "RTL1920",
                "88397QHF412"
            ],
            [
                "RAMDEV ENTERPRISES(NANDINI LAYOUT)",
                "BANGALORE",
                "Lakshman",
                "RTL2621",
                "75954CBY796"
            ],
            [
                "RAMDEV MOBILES",
                "KODAGU",
                "Karim",
                "RTL3451",
                "69403EBT867"
            ],
            [
                "RAMDEV MOBILES - B T M LAYOUT",
                "BANGALORE",
                "Bhaskar",
                "RTL3499",
                "40553NFH976"
            ],
            [
                "RANA MOBILES ELECTRONICS",
                "BANGALORE",
                "Govind",
                "RTL2441",
                "84879IHF960"
            ],
            [
                "RASHI INFOTECH",
                "BANGALORE",
                "Bhaskar",
                "RTL4141",
                "52285NHA122"
            ],
            [
                "RAVI ELECTRONICS",
                "SHIMOGA",
                "Diviraj",
                "RTL3516",
                "43503MYI959"
            ],
            [
                "RAVICHANDRA MOBILES",
                "CHICKMAGALUR",
                "Shreyas",
                "RTL3519",
                "45878PLC829"
            ],
            [
                "RAVIKUMAR ENTERPRISES",
                "BANGALORE",
                "Lakshman",
                "RTL1913",
                "85923TNM504"
            ],
            [
                "R-CONNEXXIONS",
                "BANGALORE",
                "Govind",
                "RTL3599",
                "10027UGP486"
            ],
            [
                "REPAIRTECH SOLUTIONS",
                "BANGALORE",
                "Govind",
                "RTL2962",
                "33592LXJ396"
            ],
            [
                "Revathi Enterprises",
                "BANGALORE",
                "Govind",
                "RTL1948",
                "54053UDE103"
            ],
            [
                "RIDHI INFOCOM",
                "BANGALORE",
                "Lakshman",
                "RTL2294",
                "42791YZI820"
            ],
            [
                "RJ RETAIL",
                "BANGALORE",
                "Govind",
                "RTL1929",
                "58897AMM780"
            ],
            [
                "ROSHNI MOBILES",
                "BANGALORE",
                "Govind",
                "RTL2620",
                "66252HTA591"
            ],
            [
                "ROYAL DISTRIBUTORS (Do Not Bill)",
                "GANGAVATHI",
                "Mujahid",
                "RTL4026",
                "21415UZB533"
            ],
            [
                "RTS CELL ZONE",
                "HASSAN",
                "Karim",
                "RTL3830",
                "10614VEP237"
            ],
            [
                "S L V COMMUNICATIONS",
                "BANGALORE",
                "Bhaskar",
                "RTL3775",
                "28054KVH560"
            ],
            [
                "S L V MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL3027",
                "46499TRV840"
            ],
            [
                "S V COMMUNICATION",
                "BANGALORE",
                "Mohan",
                "RTL2624",
                "24234BUB886"
            ],
            [
                "S V COMMUNICATIONS",
                "CHICKBALLAPUR",
                "Shreyas",
                "RTL3934",
                "92195YZZ423"
            ],
            [
                "S. S. ELECTRONICS",
                "BANGALORE",
                "Bhaskar",
                "RTL3923",
                "76289SFI155"
            ],
            [
                "S.L.V.MOBILE SHOPE",
                "RAICHUR",
                "Mujahid",
                "RTL4069",
                "25960RGJ254"
            ],
            [
                "S.M. ENTERPRISES",
                "KODAGU",
                "Karim",
                "RTL2442",
                "83178GLI803"
            ],
            [
                "S.S.R.S.ENTERPRISES",
                "GOWRIBIDANUR",
                "Shreyas",
                "RTL3889",
                "44054MSV961"
            ],
            [
                "SACHIN COMMUNICATION",
                "BELGAUM",
                "Mujahid",
                "RTL4108",
                "90265XUU414"
            ],
            [
                "SACHIN ENTERPRISES",
                "BELGAUM",
                "",
                "RTL4089",
                "36356PTY318"
            ],
            [
                "SADGURU TELECOMMUNICATIONS",
                "SHIMOGA",
                "Diviraj",
                "RTL2299",
                "79699DSH170"
            ],
            [
                "SAGAR MOBILES",
                "CHICKBALLAPUR",
                "Shreyas",
                "RTL2297",
                "92226ELB890"
            ],
            [
                "SAI RAM MOBILES",
                "BANGALORE",
                "Bhaskar",
                "RTL3625",
                "43944WLB864"
            ],
            [
                "SAMRUDDHI MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL1918",
                "61130ZBD142"
            ],
            [
                "SANIYA MOBILE",
                "UDUPI",
                "Karim",
                "RTL2443",
                "56130KHZ123"
            ],
            [
                "SANNIDHI MOBILE SALES & SERVICE",
                "BANGALORE",
                "Mohan",
                "RTL2616",
                "14211KBP460"
            ],
            [
                "SANTOSH MOBILE STORE POINT",
                "BANGALORE",
                "Govind",
                "RTL2012",
                "73486KTC322"
            ],
            [
                "SARA ENTERPRISES",
                "BANGALORE",
                "Lakshman",
                "RTL1964",
                "19611UJA583"
            ],
            [
                "SARASWATHI MOBILE POINT",
                "BANGALORE",
                "Lakshman",
                "RTL3616",
                "46352CBW661"
            ],
            [
                "SARVA SIDDHI ENTERPRISES",
                "BANGALORE",
                "Shreyas",
                "RTL3262",
                "80157MHF644"
            ],
            [
                "SEEMA ENTERPRISES",
                "BANGALORE",
                "Lakshman",
                "RTL2298",
                "83364OPE981"
            ],
            [
                "SHANTHI ENTERPRISES",
                "KGF",
                "Shreyas",
                "RTL3473",
                "22451QMH911"
            ],
            [
                "SHARADA MOBILE AND LAPTOP",
                "BELLARY",
                "Mujahid",
                "RTL4050",
                "74226KCH521"
            ],
            [
                "SHIV SHAKTHI TELECOM",
                "BANGALORE",
                "Mohan",
                "RTL3678",
                "80845SUS807"
            ],
            [
                "SHIVAM ENTERPRISES",
                "BANGALORE",
                "Govind",
                "RTL1937",
                "11203WJB266"
            ],
            [
                "SHIVASHAKTI COMMERCIALS",
                "TUMKUR",
                "Karim",
                "RTL3873",
                "14214NAL412"
            ],
            [
                "SHRAVANI ENTERPRISES",
                "BELLARY",
                "Mujahid",
                "RTL3998",
                "42695PCQ671"
            ],
            [
                "SHREE GAJANANA MOBILE GALARY",
                "MANDYA",
                "Karim",
                "RTL2502",
                "22397XPX219"
            ],
            [
                "SHREE GANESH TELECOM",
                "BANGALORE",
                "Govind",
                "RTL2313",
                "20921LQG834"
            ],
            [
                "SHREE GANESH TELELINKS",
                "BANGALORE",
                "Govind",
                "RTL1926",
                "18983QEC117"
            ],
            [
                "SHREE GANGA MOBILES",
                "SHIMOGA",
                "Diviraj",
                "RTL3921",
                "57399IMX584"
            ],
            [
                "SHREE JAGADGURU MOBILE",
                "SHIMOGA",
                "Diviraj",
                "RTL2444",
                "57712GYY312"
            ],
            [
                "Shree Shyam Solutions",
                "BANGALORE",
                "Shreyas",
                "RTL4100",
                "86165KBV680"
            ],
            [
                "SHREESHA ASSOCIATES",
                "UDUPI",
                "Diviraj",
                "RTL1912",
                "77623HIC755"
            ],
            [
                "SHRISTI FANCY & GENERAL STORES",
                "SULLIA",
                "Diviraj",
                "RTL2503",
                "55002OUQ510"
            ],
            [
                "SILICON MOBILE",
                "MANGALORE",
                "Diviraj",
                "RTL2445",
                "82608ZHA902"
            ],
            [
                "SIMTEL MOBILE PLANET",
                "BANGALORE",
                "Bhaskar",
                "RTL1908",
                "38721EJX683"
            ],
            [
                "SINCHANA ENTERPRISES",
                "MANDYA",
                "Karim",
                "RTL3445",
                "80944QMB175"
            ],
            [
                "SIRI MOBILE CENTER",
                "TUMKUR",
                "Karim",
                "RTL3932",
                "97982YIL524"
            ],
            [
                "SLV Enterprises",
                "BANGALORE",
                "Mohan",
                "RTL3479",
                "80369CLB110"
            ],
            [
                "SMART MOBILES",
                "CHITRADURGA",
                "Karim",
                "RTL3867",
                "49599TAF848"
            ],
            [
                "SMART MOBILES - HOSADURGA",
                "CHITRADURGA",
                "Karim",
                "RTL3948",
                "11409CRL740"
            ],
            [
                "SMS ELECTRO WORLD",
                "DAVANGERE",
                "Diviraj",
                "RTL3869",
                "84606MXE867"
            ],
            [
                "SPARKS COMMUNICATION",
                "SHIMOGA",
                "Diviraj",
                "RTL3514",
                "32002YVT432"
            ],
            [
                "SPEED COMMUNICATIONS",
                "BANGALORE",
                "Mohan",
                "RTL1890",
                "23834BFM847"
            ],
            [
                "Sree amrutha mobiles",
                "CHICKMAGALUR",
                "Karim",
                "RTL3517",
                "67249UWS302"
            ],
            [
                "SREE MANISH TELECOM",
                "BANGALORE",
                "Govind",
                "RTL2300",
                "75033IUJ570"
            ],
            [
                "SREE TRIVENI  TELECOM",
                "MANDYA",
                "Karim",
                "RTL3842",
                "40840QNV425"
            ],
            [
                "SRI ARKESHWARA ENTERPRISES",
                "BANGALORE",
                "Lakshman",
                "RTL3888",
                "13668TQO800"
            ],
            [
                "SRI BALAJI HOME APPLIANCES",
                "TUMKUR",
                "Diviraj",
                "RTL2446",
                "96897FXA783"
            ],
            [
                "SRI GANESH ASSOCIATES",
                "UDUPI",
                "Karim",
                "RTL3807",
                "52012MNQ192"
            ],
            [
                "SRI GANESH ELECTRONICS",
                "BANGALORE",
                "Bhaskar",
                "RTL2622",
                "49346AOQ940"
            ],
            [
                "Sri Ganesh Telecom And Electronics",
                "BANGALORE",
                "Lakshman",
                "RTL1892",
                "68752YNV811"
            ],
            [
                "Sri Guru Kottureshwara Enterprises",
                "HAVERI",
                "Diviraj",
                "RTL3703",
                "68475JIF950"
            ],
            [
                "SRI HANUMAN ENTERPRISES",
                "BANGALORE",
                "Govind",
                "RTL2312",
                "77553LZZ284"
            ],
            [
                "SRI HARSHU ELECTRONICS (RTGS)",
                "BANGALORE",
                "Bhaskar",
                "RTL1965",
                "92968RMF395"
            ],
            [
                "SRI LAKSHMI COMMUNICATIONS",
                "CHICKBALLAPUR",
                "Shreyas",
                "RTL4007",
                "86260NFN183"
            ],
            [
                "SRI MANJUNATHA C.D. LIBRARY",
                "BANGALORE",
                "Govind",
                "RTL2301",
                "18748JQD443"
            ],
            [
                "Sri Manjunatha Communication",
                "BANGALORE",
                "Lakshman",
                "RTL3058",
                "15077TYW144"
            ],
            [
                "SRI MANJUNATHA MOBILES",
                "HIRIYUR",
                "Karim",
                "RTL3868",
                "50711ZZG395"
            ],
            [
                "SRI MURALI STORE",
                "TUMKUR",
                "Karim",
                "RTL3866",
                "98403HTR343"
            ],
            [
                "Sri Raghavendra Mobile Gallery",
                "SHIMOGA",
                "Diviraj",
                "RTL3520",
                "48415IGL833"
            ],
            [
                "SRI RAGHAVENDRA MOBILES",
                "BIDAR",
                "Mujahid",
                "RTL4064",
                "90059BCX312"
            ],
            [
                "SRI RAJGURU MOBILE ZONE",
                "BELLARY",
                "Mujahid",
                "RTL3982",
                "54705AUE350"
            ],
            [
                "SRI SAI BHUVAN ENTERPRISES",
                "BANGALORE",
                "Mohan",
                "RTL1925",
                "29702CDP415"
            ],
            [
                "SRI SAI COMMUNICATIONS",
                "BANGALORE",
                "Mohan",
                "RTL1966",
                "85896TKW512"
            ],
            [
                "SRI SAI MOBILE GALLERY",
                "SHIMOGA",
                "Diviraj",
                "RTL2956",
                "20979IBZ496"
            ],
            [
                "SRI SAI MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL3462",
                "21515NPN289"
            ],
            [
                "SRI SAI MOBILES AND GIFT GALLERY",
                "CHITRADURGA",
                "Karim",
                "RTL4065",
                "41601LRD491"
            ],
            [
                "Sri Sai One Shop (CDC)",
                "BANGALORE",
                "Mohan",
                "RTL1914",
                "99877GUG206"
            ],
            [
                "SRI SAI TELECOM",
                "BANGALORE",
                "Lakshman",
                "RTL2649",
                "26495YUS242"
            ],
            [
                "SRI SIDHI GANESHA TELECOM",
                "BANGALORE",
                "Govind",
                "RTL1945",
                "56161NKS182"
            ],
            [
                "SRI SM AISHWARYA STORES",
                "BANGALORE",
                "Lakshman",
                "RTL3640",
                "57520YUL456"
            ],
            [
                "SRI THIPPESWAMY COMMUNICATIONS",
                "CHITRADURGA",
                "Karim",
                "RTL4038",
                "61757YQG150"
            ],
            [
                "SRI VARDHAMAN MARKETING CORPORATION",
                "MYSORE",
                "Karim",
                "RTL2619",
                "14190SMR198"
            ],
            [
                "SRI VENKATACHALA GENERAL STORES",
                "RAICHUR",
                "Mujahid",
                "RTL4033",
                "65896MNI379"
            ],
            [
                "SRI VENKATESHWARA TELECOM",
                "MANDYA",
                "Karim",
                "RTL3768",
                "97258VMI761"
            ],
            [
                "SRI VIDYA MOBILE MALL",
                "KUNIGAL",
                "Karim",
                "RTL3958",
                "12907ZKE857"
            ],
            [
                "SRINIDHI MOBILES & ELECTRONICS",
                "DAVANGERE",
                "Diviraj",
                "RTL3152",
                "50962GBE815"
            ],
            [
                "SRINIVAS COMMUNICATION",
                "SHIMOGA",
                "Diviraj",
                "RTL2287",
                "34679LWZ335"
            ],
            [
                "SRINIVASA ENTERPRISES",
                "KAMPLI",
                "Mujahid",
                "RTL4058",
                "35830WYU134"
            ],
            [
                "SS DIGITAL COMMUNICATIONS",
                "MYSORE",
                "Karim",
                "RTL3225",
                "28125GUP780"
            ],
            [
                "SSV MOBILES",
                "BANGALORE",
                "Mohan",
                "RTL3886",
                "65200JCK842"
            ],
            [
                "STERNE INDIA PRIVATE LIMITED",
                "BANGALORE",
                "Shreyas",
                "-",
                "80937WCL173"
            ],
            [
                "Sukri Smart Solutions",
                "BANGALORE",
                "Shreyas",
                "RTL4044",
                "38233ANJ667"
            ],
            [
                "SUPER ELECTRONICS",
                "BANGALORE",
                "Bhaskar",
                "RTL4037",
                "26083MOO712"
            ],
            [
                "SURABHI TELECOM",
                "TUMKUR",
                "Karim",
                "-",
                "66233GMB100"
            ],
            [
                "SURAJ TELECOM",
                "BANGALORE",
                "Mohan",
                "RTL3628",
                "20740DZR421"
            ],
            [
                "Surya cell point",
                "DAVANGERE",
                "Diviraj",
                "RTL3526",
                "48468QUF918"
            ],
            [
                "Surya mobile",
                "BANGALORE",
                "Bhaskar",
                "RTL3495",
                "79658KPA829"
            ],
            [
                "SWASTIK ELECTRONICS",
                "SHIMOGA",
                "Shreyas",
                "RTL2954",
                "37204BCL880"
            ],
            [
                "SYMPHONY MOBILE BEATS",
                "GULBARGA",
                "Mujahid",
                "RTL4036",
                "65818WSR920"
            ],
            [
                "SYMPHONY MOBILES",
                "BANGALORE",
                "Govind",
                "RTL3192",
                "28145LRH626"
            ],
            [
                "TALK",
                "BANGALORE",
                "Mohan",
                "-",
                "64057ACG958"
            ],
            [
                "TANVI MOBILES",
                "SHIMOGA",
                "Diviraj",
                "RTL2447",
                "63545YEJ451"
            ],
            [
                "Tarang mobiles",
                "BANGALORE",
                "Bhaskar",
                "RTL3503",
                "30973JDY624"
            ],
            [
                "TEL CAM",
                "BANGALORE",
                "Bhaskar",
                "RTL3060",
                "87463ATT542"
            ],
            [
                "THE MOBILE KHAZANA (CDC)",
                "BANGALORE",
                "Lakshman",
                "RTL3150",
                "78393BIU659"
            ],
            [
                "THE MOBILE MASTER",
                "GULBARGA",
                "Mujahid",
                "RTL4035",
                "80478UEZ684"
            ],
            [
                "THE MOBILE STORY (RTGS)",
                "BELLARY",
                "Mujahid",
                "RTL4034",
                "28390IZL343"
            ],
            [
                "THIRUMALA ENTERPRISES",
                "GAURIBIDANUR",
                "Shreyas",
                "RTL3090",
                "49023LZF939"
            ],
            [
                "TIRUMALA TELEWORLD",
                "HUBLI",
                "Diviraj",
                "RTL4094",
                "97003HMU657"
            ],
            [
                "TreasureSafe Solutions Pvt Ltd",
                "BANGALORE",
                "Bhaskar",
                "RTL3498",
                "79623ROB102"
            ],
            [
                "Tulsi Communication",
                "BANGALORE",
                "Bhaskar",
                "RTL3496",
                "27073ZVP461"
            ],
            [
                "UNILET APPLIANCES PRIVATE LIMITED",
                "BANGALORE",
                "Mohan",
                "RTL2285",
                "72945SHV592"
            ],
            [
                "UNIQUE COMMUNICATION (CDC)",
                "BELGAUM",
                "Mujahid",
                "RTL3154",
                "90167NTN435"
            ],
            [
                "UNIQUE MOBILES",
                "CHANNAGIRI",
                "Diviraj",
                "RTL3846",
                "36683ZDC959"
            ],
            [
                "V.B. ENTERPRISES",
                "BANGALORE",
                "Mohan",
                "RTL3466",
                "94251ICS432"
            ],
            [
                "VANDANA TELE COMMUNICATIONS",
                "BANGALORE",
                "Mohan",
                "RTL3543",
                "10132WYI556"
            ],
            [
                "Vardhan Telecom",
                "BANGALORE",
                "Govind",
                "RTL3530",
                "50136YFK782"
            ],
            [
                "VEMANA AGENCIES",
                "CHITRADURGA",
                "Karim",
                "RTL4202",
                "59438VJP157"
            ],
            [
                "VENKATESHWARA ENTERPRISES",
                "BANGALORE",
                "Mohan",
                "RTL1923",
                "61906GWL509"
            ],
            [
                "VIJAYA WORLD",
                "BANGALORE",
                "Lakshman",
                "RTL3061",
                "79103YCO532"
            ],
            [
                "Vikas Mobiles",
                "BANGALORE",
                "Mohan",
                "RTL1894",
                "77399MXY822"
            ],
            [
                "VINAYAKA MOBILES",
                "DAVANGERE",
                "Diviraj",
                "RTL4006",
                "87811LWU640"
            ],
            [
                "VINAYAKA TELECOM",
                "BANGALORE",
                "Govind",
                "RTL1938",
                "95833OKA280"
            ],
            [
                "VINOD ENTERPRISES",
                "BANGALORE",
                "Bhaskar",
                "RTL1936",
                "20836BDG248"
            ],
            [
                "VISHAL MOBILE SHOPEE",
                "BELGAUM",
                "Mujahid",
                "RTL4081",
                "53967IWQ303"
            ],
            [
                "VISHAL TELECOM",
                "BANGALORE",
                "Bhaskar",
                "RTL2316",
                "35648YEN381"
            ],
            [
                "VITTAL MOBILES",
                "HIRIYUR",
                "Karim",
                "RTL3642",
                "36593DBV308"
            ],
            [
                "WING MOBILE",
                "BANGALORE",
                "Lakshman",
                "RTL3086",
                "35285VAW433"
            ],
            [
                "Y2K MOBILE CORNER (Do Not Use)",
                "MYSORE",
                "Karim",
                "RTL4029",
                "55111MGO503"
            ],
            [
                "YELLAMMA DEVI ENTERPRISES",
                "TUMKUR",
                "Karim",
                "RTL3753",
                "57002EKI636"
            ],
            [
                "YUVA MOBILES",
                "CHICKMAGALUR",
                "Karim",
                "RTL3087",
                "11556BYH124"
            ],
            [
                "VIKAS MOBILES (DAVANAGERE)",
                "DAVANAGERE",
                "Diviraj",
                "RTL4646",
                "62834DBL624"
            ],
            [
                "DURGA MOBILES (CDC)",
                "HOSAKOTE",
                "Shreyas",
                "RTL4165",
                "48457WQM424"
            ],
            [
                "PAWALE MOBILE GALLERY",
                "BELGAUM",
                "Mujahid",
                "RTL4166",
                "68227AKG619"
            ],
            [
                "NEW SUNDHA MOBILES",
                "BELGAUM",
                "Mujahid",
                "RTL4169",
                "44866MST310"
            ],
            [
                "SAVAN MOBILE SHOP",
                "SIRSI",
                "Diviraj",
                "RTL4170",
                "83842QBK709"
            ],
            [
                "BABA COMMUNICATIONS",
                "BELGAUM",
                "Mujahid",
                "RTL4172",
                "49631ZKA875"
            ],
            [
                "CELL COM (CDC)",
                "BANGALORE",
                "Bhaskar",
                "RTL4171",
                "10967PEL207"
            ],
            [
                "BAHUBALI MOBILES",
                "BELGAUM",
                "Mujahid",
                "RTL4173",
                "37578EYL735"
            ],
            [
                "DWANI COMMUNICATIONS",
                "BANGALORE",
                "Bhaskar",
                "RTL4175",
                "29637HKW947"
            ],
            [
                "CHANNELL NINE (RTGS)",
                "BANGALORE",
                "Mohan",
                "RTL4177",
                "26738FVD918"
            ],
            [
                "NEW DIGITAL INDIA MOBILES",
                "GULBARGA",
                "Mujahid",
                "RTL4181",
                "40237XPQ583"
            ],
            [
                "TEEKSHA ELECTRONICS",
                "BANGALORE",
                "Bhaskar",
                "RTL4180",
                "53482TGK629"
            ],
            [
                "PREETHAM MOBILES",
                "KARATAGI",
                "Mujahid",
                "RTL4187",
                "98826AKC899"
            ],
            [
                "ADINATH MOBILE ACCESSORIES",
                "DAVANAGERE",
                "",
                "-",
                "31869WMH640"
            ],
            [
                "ADMIRE",
                "BANGALORE",
                "",
                "-",
                "66233BUA877"
            ],
            [
                "ADVANCE SYSTEM",
                "RT NAGAR BANGALORE",
                "",
                "-",
                "87195WGW466"
            ],
            [
                "ANAND MOBILES",
                "MYSORE",
                "",
                "-",
                "43635PGA458"
            ],
            [
                "APESHWARA MOBILE CENTRE",
                "KUSHALNAGAR",
                "",
                "RTL5719",
                "66553PIP631"
            ],
            [
                "ARHAM MOBILES AND ACCESSORIES",
                "DAVANAGERE",
                "",
                "RTL7565",
                "58225UOG875"
            ],
            [
                "ASHAPURA TELECOM",
                "BANGALORE",
                "Bhaskar",
                "RTL5409",
                "29976JCN412"
            ],
            [
                "B E TELECOM",
                "BANGALORE",
                "",
                "-",
                "42126BNF631"
            ],
            [
                "BHAVANI ENTERPRISIS",
                "BANGALORE",
                "",
                "-",
                "19595OQL119"
            ],
            [
                "BIG MOBILE AND  ELECTRONICS",
                "HASSAN",
                "Karim",
                "RTL4366",
                "23941MIZ623"
            ],
            [
                "DHANALAKSHMI ENTERPRISES",
                "BANGALORE",
                "Lakshman",
                "RTL4800",
                "65403DIW639"
            ],
            [
                "E STORE",
                "BANGALORE",
                "",
                "-",
                "83588RXX515"
            ],
            [
                "GIGABYTE INC",
                "BANGALORE",
                "",
                "-",
                "40099VKK949"
            ],
            [
                "GRAND ZONE",
                "BALLARI",
                "",
                "-",
                "68229KDV261"
            ],
            [
                "I SQUARE MOBILE SHOPEE",
                "NIPANI",
                "Mujahid",
                "-",
                "31561GVM938"
            ],
            [
                "ICON MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL2648",
                "66171LVK769"
            ],
            [
                "IGADGETS",
                "BANGALORE",
                "",
                "-",
                "25628QYG254"
            ],
            [
                "JP MOBILE WORLD",
                "BANGALORE",
                "",
                "-",
                "20424XCN904"
            ],
            [
                "KALPATHARU ENTERPRISES",
                "CHAMARAJANAGAR",
                "Karim",
                "RTL4644",
                "38697IJR457"
            ],
            [
                "KALYANI MOBILES",
                "BANGALORE",
                "",
                "-",
                "47925MDV686"
            ],
            [
                "KESAR ELECTRONICS",
                "BANGALORE",
                "",
                "-",
                "85416VOG448"
            ],
            [
                "KVS MOBILE SHOPPE",
                "BALLARI",
                "",
                "-",
                "20865OOA592"
            ],
            [
                "LAKSHMI TELECOM",
                "BANGALORE",
                "Lakshman",
                "RTL7846",
                "61443AJL513"
            ],
            [
                "M I MOBILE STOREZ",
                "CHITRADURGA",
                "Karim",
                "RTL4798",
                "14770ZDJ224"
            ],
            [
                "MAHAVEER TELECOM",
                "BANGALORE",
                "Lakshman",
                "RTL7238",
                "91350BRB368"
            ],
            [
                "MISTY MOBILES",
                "BANGALORE",
                "",
                "-",
                "73293LTJ702"
            ],
            [
                "Mobile Empire",
                "HASSAN",
                "",
                "-",
                "72612JKO641"
            ],
            [
                "MOBILE PALACE 2",
                "BANTWAL",
                "Diviraj",
                "RTL1935",
                "51665TFX169"
            ],
            [
                "MOBILE PLAZA",
                "CHINTAMANI",
                "",
                "-",
                "65005JZY668"
            ],
            [
                "MOBILE WORLD",
                "MYSORE",
                "",
                "RTL2650",
                "51463REY452"
            ],
            [
                "Mobiverse",
                "BANGALORE",
                "",
                "-",
                "61361PJH923"
            ],
            [
                "NEW CELL WORLD",
                "CHAMARAJANAGAR",
                "Karim",
                "RTL2644",
                "66215KTV374"
            ],
            [
                "NEW JANATHA MOBILES",
                "MYSORE",
                "",
                "RTL2647",
                "37462XRD792"
            ],
            [
                "PRAGATHI TELECOM (Cash & Carry)",
                "BANGALORE",
                "Govind",
                "RTL5405",
                "25251CMN600"
            ],
            [
                "R R ELECTRONICS",
                "BANGALORE",
                "",
                "RTL2646",
                "72066ILZ148"
            ],
            [
                "RISHAB TELECOM",
                "MANDYA",
                "Karim",
                "RTL5147",
                "57343DEV819"
            ],
            [
                "RS MOBILE WORLD",
                "BANGALORE",
                "",
                "-",
                "39820GNE885"
            ],
            [
                "S L V ENTERPRISES",
                "BANGALORE",
                "",
                "-",
                "73743YNH168"
            ],
            [
                "Seeme Groups  Graphics",
                "UDUPI",
                "",
                "-",
                "71615LMK447"
            ],
            [
                "SHREE SAI MOBILES",
                "MYSORE",
                "Karim",
                "RTL2645",
                "55236PWW435"
            ],
            [
                "SIRI MOBILES",
                "BANGALORE",
                "",
                "-",
                "26383XMZ504"
            ],
            [
                "SMART MOBILE GALLERY",
                "DHARWAD",
                "",
                "-",
                "60370EIB515"
            ],
            [
                "SREE RAGHAVENDRA MOBILES",
                "HOSAPETE",
                "Mujahid",
                "RTL5957",
                "72041QSV223"
            ],
            [
                "SREEDEVI ELECTRONICS AND MOBILES",
                "BANGALORE",
                "",
                "-",
                "32777ZQV215"
            ],
            [
                "SRI DEVI ELECTRONICS",
                "BANGALORE",
                "Lakshman",
                "RTL7559",
                "29314XHB465"
            ],
            [
                "SRI DEVI MOBILE COMMUNICATIONS AND TRAVEL AGENCY",
                "MANGALORE",
                "Diviraj",
                "RTL4647",
                "97999ZYH613"
            ],
            [
                "V MOBILES ZONE",
                "BANGALORE",
                "",
                "-",
                "72401CBS868"
            ],
            [
                "VIJAYALAXMI MOBILES",
                "SINDAGI",
                "",
                "-",
                "72917YTA674"
            ],
            [
                "VISION INFOTECH",
                "BANGALORE",
                "",
                "-",
                "83233VND812"
            ],
            [
                "WAVES COMMUNICATION",
                "BANGALORE",
                "",
                "-",
                "10055NMW169"
            ],
            [
                "ZAIN MOBILES",
                "CHAMARAJANAGAR",
                "",
                "-",
                "98631CLR567"
            ],
            [
                "CELL COMMUNICATION",
                "CHIKMAGALUR",
                "",
                "-",
                "51027ZXP286"
            ],
            [
                "RAJGURU TELECOM",
                "HOSPET",
                "Mujahid",
                "RTL6940",
                "50698CEM637"
            ],
            [
                "Mobile Mane",
                "CHITRADURGA",
                "",
                "-",
                "87271FWC904"
            ],
            [
                "MOBILE ANGADI (RTGS)",
                "HOSADURGA",
                "Karim",
                "RTL5408",
                "32720VDP312"
            ],
            [
                "SRI SAI SIRI MOBILES",
                "CHALLAKERE",
                "",
                "-",
                "16165YSB855"
            ],
            [
                "ELUKOTI MARKETING",
                "SRIRAMPURA VILLAGE",
                "",
                "-",
                "74783RSG290"
            ],
            [
                "VIGNESHWARA MOBILES",
                "DAVANGERE",
                "",
                "-",
                "98413MBU753"
            ],
            [
                "METRO MOBILES",
                "HOSKOTE",
                "Shreyas",
                "RTL7902",
                "93010QMU548"
            ],
            [
                "SRI VENKATESHWARA MOBILES AND GALLERY",
                "HIRIYUR",
                "",
                "-",
                "40401OMF589"
            ],
            [
                "VASAVI MOBILES",
                "HOSADURGA",
                "Karim",
                "RTL5411",
                "13075ETG409"
            ],
            [
                "CHIRANJEEVI MOBILE AND ACCESSORIES",
                "DAVANGERE",
                "",
                "-",
                "77478EIW348"
            ],
            [
                "PUSHPIT ENTERPRISES",
                "KADUR",
                "",
                "-",
                "85655CYZ709"
            ],
            [
                "SRI  HANUMAN  ENTERPRISES",
                "KADUR",
                "",
                "-",
                "10844YQH452"
            ],
            [
                "BHARATH  COLLECTION",
                "SHIMOGA",
                "",
                "-",
                "48310BSN554"
            ],
            [
                "SAHANA CELLULLAR",
                "SHIVAMOGGA",
                "",
                "-",
                "39268SJU219"
            ],
            [
                "VIKAS MOBILE",
                "CHITRADURGA",
                "",
                "-",
                "53349VTZ587"
            ],
            [
                "REDDY COMMUNICATION",
                "BAGEPALLI TOWN",
                "",
                "-",
                "84869UNX397"
            ],
            [
                "H A TELECOM",
                "HOSKOTE TOWN",
                "",
                "-",
                "54607XCE512"
            ],
            [
                "VIKRAM CASH  CARRY",
                "DAVANGERE",
                "",
                "-",
                "49987UXC309"
            ],
            [
                "SHRI GOWRI CELL POINT",
                "SHIMOGA",
                "",
                "-",
                "51314OWJ366"
            ],
            [
                "NAVEEN MOBILES",
                "SHIVAMOGGA",
                "",
                "-",
                "55169BIU185"
            ],
            [
                "Zeeshan Mobiles",
                "BHADRAVATHI",
                "",
                "-",
                "44754IJG414"
            ],
            [
                "ZOOM TECH SOLUTIONS",
                "BHADRAVATHI",
                "",
                "-",
                "79540ZQC926"
            ],
            [
                "SANGAM MOBILES",
                "HARIHARA",
                "Diviraj",
                "RTL5407",
                "32220IXH874"
            ],
            [
                "NAVEEN ELECTRONICS AND ELECTRICALS",
                "DODDABALLAPURA",
                "",
                "-",
                "37712TAD748"
            ],
            [
                "S B CELL POINT",
                "TARIKERE",
                "",
                "-",
                "43400RRM655"
            ],
            [
                "SAM TRADING COMPANY",
                "N R PURA",
                "",
                "-",
                "57609BKW992"
            ],
            [
                "MNA MOBILES ELECTRONICS",
                "CHIKBALLAPURA",
                "",
                "-",
                "71214WTN880"
            ],
            [
                "SREE CHANNAVEERA AGENCIES",
                "RAMPURA",
                "",
                "-",
                "42462PMQ152"
            ],
            [
                "NICE TECHNOLOGIES",
                "THIRTHAHALLI",
                "",
                "-",
                "53107HIN263"
            ],
            [
                "HASINI ENTERPRISES",
                "KOLAR",
                "Shreyas",
                "RTL5990",
                "46213NJH891"
            ],
            [
                "Cell World Agencies",
                "BIDAR",
                "",
                "-",
                "99544KVX213"
            ],
            [
                "SANDESH COMMUNICATION",
                "KALABURAGI",
                "Mujahid",
                "RTL4691",
                "23786VGQ466"
            ],
            [
                "ASHCOM MOBILES PRIVATE LIMITED",
                "BANGALORE",
                "Shreyas",
                "-",
                "45245EYS820"
            ],
            [
                "MOBILE PLANET DISTRIBUTOR",
                "BANGALORE",
                "Bhaskar",
                "RTL7260",
                "47477UZJ967"
            ],
            [
                "Mobile Garage",
                "SULLIA",
                "Diviraj",
                "RTL4208",
                "90412WUP239"
            ],
            [
                "JAISWAL  MOBILE SHOPEE",
                "NIPANI",
                "Mujahid",
                "RTL7266",
                "84879THS866"
            ],
            [
                "KAMAL ENTERPRICES",
                "SHIMOGA",
                "",
                "-",
                "75434SDA990"
            ],
            [
                "CITIZEN WATCH COMPANY",
                "BELAGAVI",
                "",
                "-",
                "36622SUW451"
            ],
            [
                "SHRI BANASHANKARI ENTERPRISES",
                "GOKAK",
                "",
                "-",
                "43592IZK705"
            ],
            [
                "SAMSUNG CELL CITY",
                "GOKAK",
                "",
                "-",
                "98232NKO244"
            ],
            [
                "OM SHREE PARANJYOTHI MOBILES",
                "HD KOTE",
                "Karim",
                "RTL4946",
                "73899YOM427"
            ],
            [
                "LEO AGENCIES",
                "BALEPET",
                "Bhaskar",
                "-",
                "16796NHA284"
            ],
            [
                "BHANDAGES MOBILE WORLD",
                "DHARWAD",
                "Diviraj",
                "RTL4986",
                "86148SZR897"
            ],
            [
                "SURAJ COMMUNICATION",
                "BELGAUM",
                "Mujahid",
                "RTL4810",
                "92192LKF225"
            ],
            [
                "SHAH INTERNATIONAL",
                "BELGAVI",
                "",
                "-",
                "24447VEW798"
            ],
            [
                "DARSHANS COMMUNICATIONS",
                "BELAGAVI",
                "",
                "-",
                "24291HYX515"
            ],
            [
                "ASHWINI COMMUNICATIONS",
                "SANKESHWAR",
                "",
                "-",
                "45103AXO803"
            ],
            [
                "BHOSALE MOBILES",
                "UGAR",
                "Mujahid",
                "RTL4989",
                "51991QZZ258"
            ],
            [
                "ATTITUDE.NX",
                "HUBBALLI",
                "Diviraj",
                "RTL4649",
                "72056KRT264"
            ],
            [
                "SIDDARTHA MOBILE CARE",
                "MYSORE",
                "Karim",
                "-",
                "79943BCO138"
            ],
            [
                "FRIENDS COMMUNICATION",
                "Belgaum",
                "",
                "-",
                "84323XGG606"
            ],
            [
                "PAWALE ENTERPRISES",
                "BELAGAVI",
                "",
                "-",
                "12254GGL356"
            ],
            [
                "JYOTHIBA MOBILES (RTGS)",
                "DHARWAD",
                "Diviraj",
                "RTL4939",
                "98045GUL796"
            ],
            [
                "MOBILE ARENA",
                "HUBBALLI",
                "",
                "-",
                "85032FIZ376"
            ],
            [
                "MERWADE MOBILES",
                "GADAG",
                "",
                "-",
                "72054RSD910"
            ],
            [
                "MUDHOL ENTERPRISES",
                "GADAG",
                "",
                "-",
                "16981VJF449"
            ],
            [
                "Chavadi Enterprises",
                "GADAG",
                "",
                "-",
                "13685GYA536"
            ],
            [
                "SURAJ MOBILES",
                "GADAG",
                "",
                "-",
                "47886ECH400"
            ],
            [
                "CHINTAMANI MOBILE AND ELECTRICALS",
                "CHIKODI",
                "Mujahid",
                "-",
                "17559LYM641"
            ],
            [
                "ACE COMMUNICATIONS (PEENYA)",
                "BANGALORE",
                "Lakshman",
                "",
                "92220DWM736"
            ],
            [
                "MAHAVEER COMMUNICATIONS (HEGGANAHALLI)",
                "BANGALORE",
                "Lakshman",
                "RTL4200",
                "47736RJX691"
            ],
            [
                "RECALL COMMUNICATIONS",
                "HUBLI",
                "Diviraj",
                "RTL4197",
                "90553PAJ513"
            ],
            [
                "GURUDEV ELECTRONICS",
                "BANGALORE",
                "Bhaskar",
                "RTL5426",
                "85104XCV900"
            ],
            [
                "BALAJI TELE SHOPEE",
                "BIJAPUR",
                "Mujahid",
                "RTL4205",
                "26274BYZ198"
            ],
            [
                "BHAVANI MOBILE CENTERE",
                "BIJAPUR",
                "Mujahid",
                "RTL4217",
                "40889OTH398"
            ],
            [
                "BALAJI INFOCOM  (RTGS)",
                "BANGALORE",
                "Bhaskar",
                "RTL5252",
                "33399BRD124"
            ],
            [
                "OMKAR MOBILE CENTRE",
                "SINDAGI",
                "Mujahid",
                "RTL4223",
                "41176OHM576"
            ],
            [
                "SPEED MOBILES",
                "UDUPI",
                "Diviraj",
                "RTL4226",
                "92145NJS971"
            ],
            [
                "S & S CO Inc.",
                "MYSORE",
                "Karim",
                "RTL4229",
                "10353XLC373"
            ],
            [
                "CORP ATTIRE",
                "Bangalore",
                "Shreyas",
                "",
                "79282UDW787"
            ],
            [
                "RINGTEL",
                "BANGALORE",
                "Bhaskar",
                "RTL4235",
                "16276TUS679"
            ],
            [
                "PLANET MUSIC & MOVIES",
                "BELTHANGADY",
                "Diviraj",
                "RTL4239",
                "37139NSD668"
            ],
            [
                "GIFT LINKS (INDIA) PRIVATE LIMITED",
                "BANGALORE",
                "Shreyas",
                "",
                "30953IZZ880"
            ],
            [
                "PALS MOBILE ZONE",
                "BELTHANGADY",
                "Diviraj",
                "RTL4334",
                "18063ERL976"
            ],
            [
                "7 STAR MOBILES",
                "BANGALORE",
                "Govind",
                "RTL4240",
                "55832LCO264"
            ],
            [
                "ACE COMMUNICATION (RUKMININAGAR)",
                "BANGALORE",
                "Lakshman",
                "RTL4248",
                "95062BBE870"
            ],
            [
                "KARLA MOBILE SALES & SERVICES",
                "UDUPI",
                "Diviraj",
                "RTL4249",
                "14972XNJ906"
            ],
            [
                "MOBILE PALACE - KUNDAPURA",
                "UDUPI",
                "Diviraj",
                "RTL4247",
                "16650ONY827"
            ],
            [
                "ANU MOBILE CENTRE",
                "ULLAL",
                "Diviraj",
                "RTL4251",
                "35898SPZ720"
            ],
            [
                "PLAYZONE MOBILE SALES & SERVICES",
                "UDUPI",
                "Diviraj",
                "RTL4259",
                "57292MOJ703"
            ],
            [
                "A R ENTERPRISES",
                "MYSORE",
                "",
                "",
                "81742FNU788"
            ],
            [
                "VAIBHAV MOBILES",
                "MANGALORE",
                "Diviraj",
                "RTL4322",
                "29502CGN268"
            ],
            [
                "DAY TO DAY DIGITAL",
                "MANGALORE",
                "Diviraj",
                "RTL4267",
                "88145RXH248"
            ],
            [
                "S.L.R. ENTERPRISES",
                "BANGALORE",
                "Lakshman",
                "RTL4270",
                "90116KCI971"
            ],
            [
                "NEW JAIN MOBILES",
                "BELTHANGADY",
                "Diviraj",
                "RTL4273",
                "69462YNE443"
            ],
            [
                "IMAGE MOBILES",
                "BELTHANGADY",
                "Diviraj",
                "RTL4268",
                "19544JRC654"
            ],
            [
                "CELL HOUSE",
                "SULLIA",
                "Diviraj",
                "RTL4269",
                "25346HPC646"
            ],
            [
                "MOBIZON",
                "KODAGU",
                "Karim",
                "",
                "37212VRQ797"
            ],
            [
                "KINGTRONICS",
                "MANGALORE",
                "Diviraj",
                "RTL4344",
                "96125TIR581"
            ],
            [
                "INFINITI RETAIL LIMITED (Croma)",
                "BANGALORE",
                "Shreyas",
                "",
                "79866LND983"
            ],
            [
                "AP TRADING & CO.",
                "BANGALORE",
                "Shreyas",
                "",
                "53077MXW102"
            ],
            [
                "S.R.ENTERPRISES",
                "BANTWAL",
                "Diviraj",
                "",
                "27897EFV593"
            ],
            [
                "DEEPTHI GROUPS",
                "DEVANAHALLI",
                "Shreyas",
                "RTL4345",
                "53560SPK636"
            ],
            [
                "SR MOBILE",
                "MANGALORE",
                "Diviraj",
                "RTL4341",
                "72171SKR694"
            ],
            [
                "MANI MOBILE WORLD",
                "KAMPLI",
                "Mujahid",
                "RTL4351",
                "75637FVQ432"
            ],
            [
                "GURUDEV ELECTRONICS AND MOBILES",
                "BANTWAL",
                "Diviraj",
                "RTL4432",
                "23867BCR177"
            ],
            [
                "EHAD ENTERPRISES",
                "BANGALORE",
                "Shreyas",
                "RTL4340",
                "88566DAS628"
            ],
            [
                "LIBAS MOBILE GALLERY",
                "SIRSI",
                "Diviraj",
                "RTL4433",
                "29008TQY719"
            ],
            [
                "TELEFUN",
                "MADIKERI",
                "Karim",
                "RTL4365",
                "54361CVL778"
            ],
            [
                "INZANE INC",
                "Kochi",
                "",
                "",
                "89527HXG615"
            ],
            [
                "SHRI NARAYAN SALES",
                "PUNE",
                "Shreyas",
                "",
                "17911DPB605"
            ],
            [
                "SRI RAMDEV TELECOM",
                "BANGALORE",
                "Bhaskar",
                "RTL4445",
                "83049BMW564"
            ],
            [
                "Avighna Mobiles",
                "BANGALORE",
                "Lakshman",
                "RTL4446",
                "74393VSC949"
            ],
            [
                "SRI RANGANATHA COMMUNICATIONS",
                "BANGALORE",
                "Bhaskar",
                "RLT4472",
                "13711SGZ169"
            ],
            [
                "PRO TECH SOLUTION",
                "Bengaluru",
                "Shreyas",
                "RTL5421",
                "69571ZJS302"
            ],
            [
                "TARUN ENTERPRISES",
                "RAICHUR",
                "Mujahid",
                "RTL4648",
                "98344VHM901"
            ],
            [
                "REVAN SIDDESHWAR MOBILES",
                "BASAVAKALYAN",
                "Mujahid",
                "RTL4645",
                "61774PJO113"
            ],
            [
                "GANAPATH RAJ & CO",
                "BANGALORE",
                "",
                "",
                "33646UZZ421"
            ],
            [
                "KALPATRU ELECTRONICS",
                "Mundargi",
                "Mujahid",
                "RTL4824",
                "70956KDS799"
            ],
            [
                "SRI SUGURESHWARA ENTERPRISES",
                "RAICHUR",
                "Mujahid",
                "RTL4692",
                "75358JGD748"
            ],
            [
                "Padmavathi Telecom",
                "BANGALORE",
                "Bhaskar",
                "RTL4796",
                "66241SFO795"
            ],
            [
                "MAHENDRA MOBILE",
                "BANGALORE",
                "Bhaskar",
                "RTL4797",
                "45291ZSN226"
            ],
            [
                "MAHESH MOBILE WORLD",
                "Ramdurg",
                "Mujahid",
                "RTL4937",
                "96141IWC973"
            ],
            [
                "SRI JAGADAMBHA TELECOM",
                "BANGALORE",
                "Lakshman",
                "RTL4795",
                "83876KWL425"
            ],
            [
                "KAVERI MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL4799",
                "76531CVT611"
            ],
            [
                "Sangam Electronics & Home Appliances",
                "BIDAR",
                "Mujahid",
                "RTL4820",
                "17868VNH250"
            ],
            [
                "MOBILE PLAZA SALES & SERVICE",
                "HOSANAGARA",
                "Diviraj",
                "RTL4809",
                "48109AIR546"
            ],
            [
                "SHRI  RAJENDRA  COMMUNICATION",
                "HUBLI",
                "Diviraj",
                "RTL4808",
                "55373VIQ689"
            ],
            [
                "SHREE SAI MOBILES (DHARWAD)",
                "DHARWAD",
                "Diviraj",
                "RTL4864",
                "34155DZM955"
            ],
            [
                "KAMAKSHI ENTERPRISES",
                "HUBLI",
                "Diviraj",
                "RTL4839",
                "14333EYK250"
            ],
            [
                "RAMESH MOBILES",
                "YADGIR",
                "Mujahid",
                "",
                "18893MII897"
            ],
            [
                "VINOD MOBILES",
                "HIRISAVE",
                "Karim",
                "RTL4942",
                "19342WEN243"
            ],
            [
                "MOBILE ZONE",
                "NAGAMANGALA",
                "Karim",
                "RTL4945",
                "28605REV214"
            ],
            [
                "BHAVANI MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL4941",
                "93818GPD644"
            ],
            [
                "UDAY MOBILES",
                "HASSAN",
                "Karim",
                "RTL4985",
                "80127FPW383"
            ],
            [
                "SIDDARTH GIFT CORNER",
                "Srirangapattana",
                "Karim",
                "RTL4990",
                "26209RLA567"
            ],
            [
                "D K S MOBILE SHOPPE",
                "DHARWAD",
                "Diviraj",
                "",
                "21814LQD300"
            ],
            [
                "SHETTY DIGITAL LIFE",
                "KARKALA",
                "Diviraj",
                "RTL4987",
                "66637GNQ538"
            ],
            [
                "M TECH MOBILE SALES AND SERVICE AND CYBER ZONE",
                "DAKSHINA KANNADA",
                "Diviraj",
                "RTL4988",
                "99027VLK822"
            ],
            [
                "MOBILE GALLERY",
                "MOODBIDRI",
                "Diviraj",
                "RTL4991",
                "22989APG598"
            ],
            [
                "BORA EXIM PRIVATE LIMITED",
                "PUNE",
                "Shreyas",
                "",
                "22244JUJ927"
            ],
            [
                "HITECH MOBILES & ELECTRONICS",
                "KUSHALNAGAR",
                "Karim",
                "RTL5418",
                "97360CCG783"
            ],
            [
                "PRAVEEN CELL N CARE",
                "SIRUGUPPA",
                "Mujahid",
                "RTL5419",
                "50077IBB624"
            ],
            [
                "SRI SAI GANESH COMMUNICATION",
                "GULBARGA",
                "Mujahid",
                "RTL5373",
                "96604RBM738"
            ],
            [
                "MODERN MOBILE POINT",
                "SEDAM",
                "Mujahid",
                "RTL6926",
                "99490AOE223"
            ],
            [
                "GANESH MOBILES (HARAPANAHALLI)",
                "HARAPANAHALLI",
                "Diviraj",
                "",
                "16654HZW821"
            ],
            [
                "NATIONAL MOBILE CENTRE",
                "KOLAR",
                "Shreyas",
                "",
                "90786GMD646"
            ],
            [
                "DURGA MOBILES (DHARWAD)",
                "DHARWAD",
                "Diviraj",
                "RTL7253",
                "53920UPY773"
            ],
            [
                "R.K.MOBILES",
                "HASSAN",
                "Karim",
                "RTL5358",
                "38489VCZ153"
            ],
            [
                "CITY ELECTRONICS",
                "TALIKOTI",
                "Mujahid",
                "RTL5424",
                "58106SCJ451"
            ],
            [
                "MAHAVEER SELECTIONS",
                "HAGARIBOMMANAHALLI",
                "Mujahid",
                "RTL7850",
                "90835GPI483"
            ],
            [
                "KEERTHANA ENTERPRISES",
                "BANGALORE",
                "Lakshman",
                "RTL4062",
                "26961XVO246"
            ],
            [
                "NEW SAMRUDHI MOBILES",
                "MANDYA",
                "Karim",
                "RTL6939",
                "58510DPE958"
            ],
            [
                "MAAHI MOBILES",
                "MANGALORE",
                "Diviraj",
                "RTL5371",
                "42081YOM987"
            ],
            [
                "MOBILE STUDIO",
                "MYSORE",
                "Karim",
                "RTL5443",
                "77584MNO113"
            ],
            [
                "SHINE MOBILE",
                "KUNDAPURA",
                "Diviraj",
                "",
                "56517XKO606"
            ],
            [
                "APOORVA DIGITAL STORE",
                "BANGALORE",
                "Lakshman",
                "RTL5228",
                "25974WQO956"
            ],
            [
                "RAMDEV ENTERPRISES (VARTHUR)",
                "BANGALORE",
                "Govind",
                "",
                "14808RUF675"
            ],
            [
                "PADAM SHREE ENTERPRISES",
                "BANGALORE",
                "Govind",
                "RTL5406",
                "67514IFD477"
            ],
            [
                "LAXMI TELECOM",
                "BANGALORE",
                "Bhaskar",
                "RTL5414",
                "97390UMU551"
            ],
            [
                "Login Mobiles",
                "VIRAJPET",
                "Karim",
                "",
                "91842CBX238"
            ],
            [
                "S K S  COMMUNICATIONS",
                "PAVAGADA",
                "Diviraj",
                "RTL5412",
                "67331FQH906"
            ],
            [
                "S L N GIFT AND ELECTRONICS",
                "CHANNAGIRI",
                "Diviraj",
                "RTL5415",
                "72465JEI521"
            ],
            [
                "GANAPATI MOBILE WORLD (RTGS/CDC)",
                "KOPPAL",
                "Mujahid",
                "RTL7849",
                "93903GHV582"
            ],
            [
                "VINU MOBILES",
                "CHALLAKERE",
                "Karim",
                "RTL5413",
                "73803SKA270"
            ],
            [
                "PADMASHREE ENTERPRISES",
                "MANGALORE",
                "Diviraj",
                "RTL5425",
                "35748SOM116"
            ],
            [
                "M J RETAILS",
                "BANGALORE",
                "Govind",
                "RTL5423",
                "61738ZNA281"
            ],
            [
                "SIRI MOBILES (CHIKKABALLAPUR)",
                "CHIKKABALLAPUR",
                "Shreyas",
                "RTL6941",
                "74956STL121"
            ],
            [
                "RATHOD BUILDMART PRIVATE LIMITED",
                "BANGALORE",
                "",
                "",
                "50832DWX691"
            ],
            [
                "CHANDAN ELECTRONICS AND MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL5420",
                "41231HXZ594"
            ],
            [
                "STAR MOBILES",
                "BANGALORE",
                "Lakshman",
                "RTL5422",
                "96055DPH178"
            ],
            [
                "S V MOBILE SOLUTIONS",
                "BANGALORE",
                "Lakshman",
                "",
                "93912ZMT231"
            ],
            [
                "MOBILE PLANET (UDUPI)",
                "UDUPI",
                "Diviraj",
                "RTL6028",
                "22781UER701"
            ],
            [
                "MS MAHAVEER MOBILES",
                "VIJAYAPURA",
                "Mujahid",
                "RTL5410",
                "95708MKP727"
            ],
            [
                "S.R.S.GROUPS",
                "MANDYA",
                "Mohan",
                "RTL5372",
                "27189YUZ591"
            ],
            [
                "URBANE DESIGNS",
                "BANGALORE",
                "Shreyas",
                "",
                "99877IUQ878"
            ],
            [
                "ANAND ENTERPRISES",
                "BANGALORE",
                "Govind",
                "RTL6370",
                "20636GIJ173"
            ],
            [
                "LINE TOUCH LLP",
                "BANGALORE",
                "Shreyas",
                "",
                "96802DCH389"
            ],
            [
                "SHWETA MOBILES  COMPUTERS",
                "HYDERABAD",
                "Shreyas",
                "",
                "37665IYL838"
            ],
            [
                "Y2K MOBILE CORNER",
                "MYSORE",
                "Karim",
                "RTL4029",
                "23570CNN152"
            ],
            [
                "ADHUNIK INTERNATIONAL",
                "BANGALORE",
                "Shreyas",
                "",
                "53807LEY903"
            ],
            [
                "JINESHWAR DISTRIBUTORS",
                "BELLARY",
                "Mujahid",
                "RTL7255",
                "23640ACB386"
            ],
            [
                "VFIXIT",
                "MYSORE",
                "Karim",
                "RTL5555",
                "48315BDP730"
            ],
            [
                "NEW SHREE CHAKRA MOBILES & HOME APPLIANCES",
                "KUSHTAGI",
                "Mujahid",
                "RTL5596",
                "42891SZW910"
            ],
            [
                "GAYATRI FASHIONS",
                "BANGALORE",
                "Shreyas",
                "",
                "29388WCZ683"
            ],
            [
                "JUST TALK",
                "CHENNAI",
                "Shreyas",
                "",
                "53461EFV117"
            ],
            [
                "APOORVA MOBILE KART (HESARAGATTA)",
                "BANGALORE",
                "Lakshman",
                "",
                "67729JAP299"
            ],
            [
                "R S ENTERPRISES",
                "BANGALORE",
                "Lakshman",
                "RTL5601",
                "70531XFT664"
            ],
            [
                "SHREE PRIYA ENTERPRISES",
                "BANGALORE",
                "Shreyas",
                "",
                "34702RML729"
            ],
            [
                "Rishabh Mobile",
                "BIJAPUR",
                "Mujahid",
                "RTL5656",
                "27621BKM884"
            ],
            [
                "TRADEARTZ",
                "BANGALORE",
                "Shreyas",
                "",
                "46647AML101"
            ],
            [
                "SANTOSH ENTERPRISES",
                "CHAMRAJNAGAR",
                "Karim",
                "RTL5657",
                "28520FSJ284"
            ],
            [
                "M CUBE",
                "HINKAL",
                "Karim",
                "RTL5892",
                "58635SNP629"
            ],
            [
                "HARSHA MOBILES",
                "MYSORE",
                "Karim",
                "",
                "84511SNP982"
            ],
            [
                "SRI MAHADESHWARA ENTERPRISES.",
                "KOLLEGAL",
                "Karim",
                "",
                "52209TOJ541"
            ],
            [
                "SRI RAVINATHJI MOBILES & ACCESSORIES",
                "KUSHALNAGAR",
                "Karim",
                "RTL5720",
                "72471DFP173"
            ],
            [
                "PROFAB CONCEPTS INDIA LLP",
                "BANGALORE",
                "Shreyas",
                "",
                "19263WZI875"
            ],
            [
                "AYAANSH ENTERPRISES",
                "BELTHANGADY",
                "Diviraj",
                "RTL7022",
                "76212IDB420"
            ],
            [
                "SKY MOBILES",
                "Bengaluru",
                "Mohan",
                "RTL7234",
                "51605LFC174"
            ],
            [
                "TANISHKA SAREES",
                "BANGALORE",
                "Shreyas",
                "",
                "71452NOT212"
            ],
            [
                "Anand Mobiles (Basveshwara Nagar)",
                "BANGALORE",
                "Lakshman",
                "RTL6114",
                "15090DAU219"
            ],
            [
                "Axion Computers",
                "BANGALORE",
                "Shreyas",
                "",
                "75259HRP602"
            ],
            [
                "KANNADA SAHITYA MOBILES",
                "MANDYA",
                "Karim",
                "RTL5960",
                "42170LDJ734"
            ],
            [
                "CHIRAG ENTERPRISES",
                "CHENNAI",
                "Shreyas",
                "",
                "67898ODE161"
            ],
            [
                "SRI LAKSHMI MOBILES AND ELECTRONICS",
                "CHIKKABALLAPUR",
                "Shreyas",
                "",
                "84846NIJ376"
            ],
            [
                "AMBE MARKETING",
                "TUMKUR",
                "Shreyas",
                "RTL1891",
                "37800BVK327"
            ],
            [
                "NEW MOBILE STREET",
                "MANGALORE",
                "Diviraj",
                "RTL7852",
                "15236WZS256"
            ],
            [
                "THE MOBI HUB",
                "MANGALORE",
                "Karim",
                "RTL7024",
                "35782RRA360"
            ],
            [
                "SHRI AMBE COMMUNICATION",
                "HAVERI",
                "Diviraj",
                "RTL6371",
                "66231RTS502"
            ],
            [
                "A.R.CHAVAN AND CO",
                "GADAG",
                "Diviraj",
                "RTL7264",
                "79623BMW674"
            ],
            [
                "SREE LAKSHMI VENKATESHWARA TELECOM AND MOBILE SERVICE",
                "MANDYA",
                "Karim",
                "RTL7251",
                "64149OGB466"
            ],
            [
                "GAJANANA ENTERPRISES (Andhrahalli)",
                "BANGALORE",
                "Lakshman",
                "RTL6082",
                "84372LZG567"
            ],
            [
                "MOBILE ZONE (GONIKOPPAL)",
                "GONIKOPPAL",
                "Karim",
                "RTL7246",
                "57243XIO926"
            ],
            [
                "MAHAVEER COMMUNICATION - MANDYA",
                "MANDYA",
                "Karim",
                "",
                "72056SEA143"
            ],
            [
                "LEO MOBILES AND ELECTRONICS",
                "DODDABALLAPURA",
                "Govind",
                "RTL7256",
                "62774BMM375"
            ],
            [
                "Preethi Mobile Store",
                "SULLIA",
                "Diviraj",
                "RTL7248",
                "69323PWI219"
            ],
            [
                "SREE VENKATESHWARA  MOBILE SALES AND SERVICE",
                "MANDYA",
                "Karim",
                "",
                "54792EBQ189"
            ],
            [
                "YASHASVI  MOBILES",
                "KANAKAPURA",
                "Karim",
                "RTL7244",
                "75573CSW149"
            ],
            [
                "ARIHANT MARKETING",
                "CHENNAI",
                "",
                "",
                "69517LPE938"
            ],
            [
                "SMART MOBILE STORES",
                "BANGALORE",
                "Govind",
                "RTL6942",
                "92593RTH126"
            ],
            [
                "TOUCH STONE ENTERPRISES (P) LTD",
                "BANGALORE",
                "Shreyas",
                "",
                "54173BHT218"
            ],
            [
                "JUST MOBILE TELECOM",
                "BANGALORE",
                "Lakshman",
                "",
                "70073EXJ392"
            ],
            [
                "DEVI INTERNATIONAL",
                "BANGALORE",
                "Mohan",
                "RTL6007",
                "23456URA503"
            ],
            [
                "METALCO EXTRUSIONS GLOBAL LLP",
                "BANGALORE",
                "Shreyas",
                "",
                "67719KNV751"
            ],
            [
                "GRIFFIN DESIGN",
                "BANGALORE",
                "Shreyas",
                "",
                "59683EWM924"
            ],
            [
                "FINAL TOUCH",
                "BANGALORE",
                "Shreyas",
                "",
                "32259QSD132"
            ],
            [
                "TAJ MOBILE CENTER",
                "BIJAPUR",
                "Mujahid",
                "RTL7252",
                "23474FOM245"
            ],
            [
                "OMAA INFOTECH SERVICES",
                "BANGALORE",
                "Shreyas",
                "",
                "87347FWB247"
            ],
            [
                "THE MOBILE LOUNGE",
                "BANGALORE",
                "Lakshman",
                "RTL6372",
                "11139LFT837"
            ],
            [
                "Hanuman Telecom (Hosa Road)  (CDC/PDC)",
                "BANGALORE",
                "Bhaskar",
                "RTL6517",
                "22319PAB245"
            ],
            [
                "S L V MOBILE MART",
                "DODBALLAPUR",
                "Shreyas",
                "RTL7262",
                "78495YNH871"
            ],
            [
                "SUNIL APPLIANCES",
                "MYSORE",
                "Karim",
                "RTL6928",
                "75592IRA991"
            ],
            [
                "SRI GOWRI MOBILES",
                "KOLAR",
                "Shreyas",
                "RTL6494",
                "53379CAM386"
            ],
            [
                "MOBILE STORE",
                "MANGALORE",
                "Diviraj",
                "RTL7265",
                "64178EKU155"
            ],
            [
                "SKYWAY INFOSYSTEMS",
                "BANGALORE",
                "Shreyas",
                "",
                "46852BYP649"
            ],
            [
                "SRS ELECTRONICS",
                "BANGALORE",
                "Lakshman",
                "RTL7564",
                "98781PYS476"
            ],
            [
                "KARAVALI MOBILES",
                "SULLIA",
                "Diviraj",
                "RTL7237",
                "65978BSL251"
            ],
            [
                "MNA MOBILES & ELECTRONICS",
                "KOLAR",
                "Shreyas",
                "RTL6997",
                "65987QIU869"
            ],
            [
                "S L N ENTERPRISES",
                "RAMANAGARA",
                "Karim",
                "",
                "65628ZOP252"
            ],
            [
                "VASISHTA ENTERPRISES",
                "BANGALORE",
                "Lakshman",
                "RTL6493",
                "44441SCP681"
            ],
            [
                "D MOBILES",
                "KOLAR",
                "Shreyas",
                "",
                "48309YDQ536"
            ],
            [
                "SILICON MOBILES (CHIKMAGALUR)",
                "CHIKMAGALUR",
                "Karim",
                "RTL7268",
                "20233AIW788"
            ],
            [
                "SRI NANDI MOBILES & APPLIANCES",
                "BELLARY",
                "Mujahid",
                "RTL6519",
                "96390EQH987"
            ],
            [
                "MOBILE ZONE (YADGIR)",
                "YADGIR",
                "Mujahid",
                "RTL6518",
                "49987XGS781"
            ],
            [
                "PHONE INDIA",
                "RANEBENNUR",
                "Diviraj",
                "RTL7025",
                "10864PXT582"
            ],
            [
                "A.R. ELECTRONICS STORE.",
                "BALLARI",
                "Mujahid",
                "",
                "65846DQR292"
            ],
            [
                "VIDYASAGAR MOBILE AND ELECTRONICS",
                "YELBURGA",
                "Mujahid",
                "RTL6927",
                "42156JVM144"
            ],
            [
                "TALK SHOP",
                "BHATKAL",
                "Diviraj",
                "RTL7247",
                "89525DAF438"
            ],
            [
                "ARPITHA ELECTRONICS",
                "DAVANGERE",
                "Diviraj",
                "RTL7847",
                "77303TFK957"
            ],
            [
                "KARNATAKA MOBILE & TRAVELS",
                "BANGALORE",
                "Lakshman",
                "RTL6515",
                "38036EYX766"
            ],
            [
                "MOKSHA COMMUNICATIONS",
                "BELGAUM",
                "Mujahid",
                "RTL7019",
                "41641TPK689"
            ],
            [
                "AASIM CELL WORLD",
                "GULBARGA",
                "Mujahid",
                "RTL6773",
                "29366EYI920"
            ],
            [
                "NIMBESHWARI MOBILES",
                "MYSORE",
                "Karim",
                "RTL6774",
                "93068RJL543"
            ],
            [
                "BALAJI ELECTRONICS",
                "BANGALORE",
                "Bhaskar",
                "",
                "45208AEC933"
            ],
            [
                "SRI SAMRUDDI MOBILES",
                "Mandya district.",
                "Karim",
                "",
                "50883KZB447"
            ],
            [
                "NAVYA MOBILES",
                "BANGALORE",
                "Mohan",
                "RTL6772",
                "70457LPF212"
            ],
            [
                "CHOUDHARI ENTERPRISES",
                "HUBLI",
                "Diviraj",
                "RTL7026",
                "95611PSC532"
            ],
            [
                "MOBILE ANGADI (BANGALORE)",
                "BANGALORE",
                "Mohan",
                "",
                "16298VAJ473"
            ],
            [
                "VARDHAMAN & CO",
                "BANGALORE",
                "Mohan",
                "RTL7258",
                "29174XZM696"
            ],
            [
                "MAHALAKSHMI MOBILES & ELECTRONICS",
                "BANGALORE",
                "Mohan",
                "RTL7243",
                "38752VMH911"
            ],
            [
                "SHRIDHARA MOBILES",
                "Harihara Fort",
                "Diviraj",
                "RTL7267",
                "68256ANA586"
            ],
            [
                "SHREE MOBILE SHOP",
                "MANGALORE",
                "Diviraj",
                "RTL7250",
                "16087AAT788"
            ],
            [
                "BALAJI ENTERPRISES [BOMMANAHALLI]",
                "Bangalore",
                "Bhaskar",
                "RTL7259",
                "25881XBD427"
            ],
            [
                "OM SAI TELECOM",
                "BANGALORE",
                "Lakshman",
                "RTL7242",
                "42731LGT567"
            ],
            [
                "NEW BHARAT MOBILES AND ACCESSORIES",
                "GULBARGA",
                "Mujahid",
                "",
                "94557ZHO363"
            ],
            [
                "BHARATH MOBILE GALLERY",
                "Bangalore",
                "Bhaskar",
                "RTL7269",
                "30676PNH399"
            ],
            [
                "SRI MANJUNATHA ENTERPRISES",
                "TUMKUR",
                "Karim",
                "RTL7245",
                "57245TWA304"
            ],
            [
                "GADGET SMART",
                "MANGALORE",
                "Diviraj",
                "RTL7023",
                "10780DBW513"
            ],
            [
                "UPDATES TRADING LLP",
                "MALAPPURAM",
                "Shreyas",
                "",
                "92627XBJ295"
            ],
            [
                "AXIS INFOTECH",
                "VEPERY",
                "Shreyas",
                "",
                "30181DSS654"
            ],
            [
                "PIONEER TELELINK",
                "BELGAUM",
                "Mujahid",
                "",
                "77473SGG919"
            ],
            [
                "SHAH COMMUNICATION",
                "BELGAUM",
                "Mujahid",
                "RTL7016",
                "89912RQC792"
            ],
            [
                "NAKSHATRA MOBILES",
                "Belthangady",
                "Diviraj",
                "RTL7240",
                "19351FJJ136"
            ],
            [
                "AM MOBILE GALARY",
                "BANGALORE",
                "Shreyas",
                "RTL7241",
                "50903VBZ546"
            ],
            [
                "CELL ZONE (Byrasandra)",
                "Bangalore",
                "Bhaskar",
                "",
                "46589WUE867"
            ],
            [
                "ARADHANA ENTERPRISES",
                "Ujire",
                "Diviraj",
                "RTL7254",
                "11453EIX361"
            ],
            [
                "G B TOTAD",
                "Gadag",
                "Diviraj",
                "RTL7235",
                "42662ZXZ608"
            ],
            [
                "NISHANI MOBILES SALES AND SERVICES",
                "KOPPAL",
                "Mujahid",
                "RTL7261",
                "34757BDX645"
            ],
            [
                "HANUMAN TELECOM (BEGUR ROAD)",
                "BANGALORE",
                "Bhaskar",
                "RTL7263",
                "68377LEO404"
            ],
            [
                "SANGU ENTERPRISES",
                "Yelburga",
                "Mujahid",
                "RTL7853",
                "48712ZDE639"
            ],
            [
                "SRI BALAJI MOBILES",
                "KARKALA",
                "Diviraj",
                "",
                "96102TTY177"
            ],
            [
                "JISHU INDIA ELECTRONICS PRIVATE LIMITED",
                "NEW DELHI",
                "Shreyas",
                "",
                "39577AUY683"
            ],
            [
                "SAI SMART MOBILES AND HOME APPLIANCES",
                "HOSADURGA",
                "Karim",
                "RTL3948",
                "95502CIF535"
            ],
            [
                "DEELIP ENTERPRISES",
                "BANGALORE",
                "Shreyas",
                "RTL7848",
                "26412CYC441"
            ],
            [
                "SHUDHI MOBILES PRIVATE LIMITED",
                "Bengaluru",
                "Lakshman",
                "RTL7560",
                "83788IYI268"
            ],
            [
                "MOBILE GALAXY",
                "BENGALURU",
                "Lakshman",
                "RTL7561",
                "40046DQL833"
            ],
            [
                "APOORVA MOBILES TALIKOTI",
                "TALIKOTI",
                "Mujahid",
                "RTL7562",
                "25397PTY257"
            ],
            [
                "MEGHA MOBILE STORES (MMS) INDIA PRIVATE LIMITED",
                "MYSORE",
                "Karim",
                "RTL7571",
                "21691FEO130"
            ],
            [
                "MAHATHI  TECHNOLOGIES (ITREE)",
                "BANGALORE",
                "Shreyas",
                "RTL3641",
                "35576POI951"
            ],
            [
                "GIRIAS INVESTMENT PVT LIMITED,",
                "Bengaluru",
                "Shreyas",
                "RTL7568",
                "95450QIS652"
            ],
            [
                "TRAPASOL INDIA PRIVATE LIMITED",
                "BANGALORE",
                "Shreyas",
                "RTL7569",
                "89880ZTH425"
            ],
            [
                "SRIKANTH TELECOM",
                "Bangalore",
                "Lakshman",
                "RTL7854",
                "11864POH796"
            ],
            [
                "New Mobile Campus",
                "Kalaburagi",
                "Mujahid",
                "",
                "21736GFU420"
            ],
            [
                "M/S. SRI SAMRUDDHI COMMUNICATION",
                "AFZALPUR",
                "Mujahid",
                "RTL8074",
                "47258SRW404"
            ],
            [
                "K.B.N COMMUNICATION",
                "CHINCHOLI",
                "Mujahid",
                "",
                "73597VAF563"
            ],
            [
                "DHANLAXMI COMMUNICATION (Rachenahalli)",
                "Bengaluru",
                "Bhaskar",
                "RTL8073",
                "74786WZU186"
            ],
            [
                "CELL CAFE",
                "MANGALORE",
                "Diviraj",
                "RTL8071",
                "13734XFP102"
            ],
            [
                "AMRESHWAR MOBILE & ELETRONICS",
                "BIDAR",
                "Mujahid",
                "RTL7948",
                "56558YZO169"
            ],
            [
                "S S PATIL CELL POINT & AGENCIES",
                "JEWARGI",
                "Mujahid",
                "",
                "21376RIF531"
            ],
            [
                "RAGHAV DISTRIBUTORS (AD)",
                "GANGAVATHI",
                "Shreyas",
                "RD53",
                "13658FQK573"
            ],
            [
                "THE MOBILE SHOP",
                "Bengaluru",
                "Lakshman",
                "RTL8075",
                "32892NSC923"
            ],
            [
                "MOBILE TRACK",
                "MOODBIDRI",
                "Diviraj",
                "",
                "18809DME726"
            ],
            [
                "NOOR MOBILE SHOPEE.",
                "BRUCEPET",
                "Mujahid",
                "",
                "42355DQQ445"
            ],
            [
                "RED CURRANT TECHNOLOGIES",
                "BANGALORE",
                "Bhaskar",
                "",
                "59420VAF770"
            ],
            [
                "MOBILE PLANET ENTERPRISES",
                "Mangaluru",
                "Diviraj",
                "",
                "51584KEL839"
            ]
        ];


        foreach ($arr as &$innerArray) {
            $innerArray = [
                "contact_name" => $innerArray[0],     // 1st element of inner array
                "billing_city" => $innerArray[1],     // 2nd element of inner array
                "cf_sales_person_name" => $innerArray[2], // 3rd element of inner array
                "cf_rtl_code" => $innerArray[3],      // 4th element of inner array
                "guid" => $innerArray[4]              // 5th element of inner array
            ];
        }

        print_r($arr);



        DB::table('contacts')->insert($arr);
    }
}
