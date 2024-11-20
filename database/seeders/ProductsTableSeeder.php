<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'HyperX Cloud II Gaming Headset',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Driver: 53mm Neodymium Magnets<br>
        Frequency Response: 15Hz–25,000 Hz<br>
        Connection Type: USB/3.5mm<br>
        Microphone: Detachable<br>
        Features: 7.1 Virtual Surround Sound<br>
        Weight: 309g</p>
        </div>',
                'colors' => '#ff0000,#000000',
                'price' => 129900,
                'discount' => 119900,
                'tag' => 'Hot',
                'category_id' => 1,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Razer BlackShark V2 Pro',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Driver: Razer™ TriForce Titanium 50mm<br>
        Frequency Response: 12 Hz – 28 kHz<br>
        Connection: Wireless 2.4GHz<br>
        Battery Life: Up to 24 hours<br>
        Features: THX Spatial Audio<br>
        Weight: 320g</p>
        </div>',
                'colors' => '#000000',
                'price' => 199900,
                'discount' => 179900,
                'tag' => 'New',
                'category_id' => 1,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'SteelSeries Arctis 7+',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Driver: 40mm Neodymium<br>
        Frequency Response: 20–20000 Hz<br>
        Connection: USB-C Wireless<br>
        Battery Life: 30 hours<br>
        Features: 360° Spatial Audio<br>
        Weight: 354g</p>
        </div>',
                'colors' => '#ffffff,#000000',
                'price' => 169900,
                'discount' => 159900,
                'tag' => 'Hot',
                'category_id' => 1,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Logitech G Pro X',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Driver: PRO-G 50mm<br>
        Frequency Response: 20Hz-20KHz<br>
        Connection: USB/3.5mm<br>
        Features: Blue VO!CE microphone technology<br>
        DTS Headphone:X 2.0<br>
        Weight: 320g</p>
        </div>',
                'colors' => '#000000',
                'price' => 129900,
                'discount' => 119900,
                'tag' => 'New',
                'category_id' => 1,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Corsair HS80 RGB WIRELESS',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Driver: 50mm Neodymium<br>
        Frequency Response: 20Hz - 40kHz<br>
        Connection: SLIPSTREAM WIRELESS<br>
        Battery Life: Up to 20 hours<br>
        Features: Dolby Atmos Spatial Audio<br>
        Weight: 367g</p>
        </div>',
                'colors' => '#000000,#ffffff',
                'price' => 149900,
                'discount' => 139900,
                'tag' => 'Hot',
                'category_id' => 1,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Logitech G Pro X Superlight',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Sensor: HERO 25K<br>
        DPI: 25,600<br>
        Buttons: 5 Programmable<br>
        Connection: LIGHTSPEED Wireless<br>
        Battery Life: Up to 70 hours<br>
        Weight: 63g</p>
        </div>',
                'colors' => '#ffffff,#000000,#ff69b4',
                'price' => 149900,
                'discount' => 139900,
                'tag' => 'Hot',
                'category_id' => 2,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Razer DeathAdder V3 Pro',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Sensor: Focus Pro 30K Optical<br>
        DPI: 30,000<br>
        Buttons: 5 Programmable<br>
        Connection: HyperSpeed Wireless<br>
        Battery Life: Up to 90 hours<br>
        Weight: 63g</p>
        </div>',
                'colors' => '#ffffff,#000000',
                'price' => 159900,
                'discount' => 149900,
                'tag' => 'New',
                'category_id' => 2,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'SteelSeries Prime Wireless',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Sensor: TrueMove Air<br>
        DPI: 18,000<br>
        Buttons: 6 Programmable<br>
        Connection: Quantum 2.0 Wireless<br>
        Battery Life: Up to 100 hours<br>
        Weight: 80g</p>
        </div>',
                'colors' => '#000000',
                'price' => 129900,
                'discount' => 119900,
                'tag' => 'Hot',
                'category_id' => 2,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Zowie EC2-C',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Sensor: 3360<br>
        DPI: 400/800/1600/3200<br>
        Buttons: 5<br>
        Connection: Wired USB<br>
        Polling Rate: 1000Hz<br>
        Weight: 73g</p>
        </div>',
                'colors' => '#000000',
                'price' => 79900,
                'discount' => 74900,
                'tag' => 'New',
                'category_id' => 2,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Glorious Model O Wireless',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Sensor: BAMF<br>
        DPI: 19,000<br>
        Buttons: 6 Programmable<br>
        Connection: 2.4GHz Wireless<br>
        Battery Life: Up to 71 hours<br>
        Weight: 69g</p>
        </div>',
                'colors' => '#ffffff,#000000',
                'price' => 89900,
                'discount' => 79900,
                'tag' => 'Hot',
                'category_id' => 2,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'LG 27GP850-B UltraGear',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Size: 27"<br>
        Resolution: 2560 x 1440 (QHD)<br>
        Panel: Nano IPS<br>
        Refresh Rate: 165Hz (OC 180Hz)<br>
        Response Time: 1ms GtG<br>
        HDR: VESA DisplayHDR 400</p>
        </div>',
                'colors' => '#000000',
                'price' => 499900,
                'discount' => 469900,
                'tag' => 'Hot',
                'category_id' => 3,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'ASUS ROG Swift PG279QM',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Size: 27"<br>
        Resolution: 2560 x 1440 (QHD)<br>
        Panel: Fast IPS<br>
        Refresh Rate: 240Hz<br>
        Response Time: 1ms GtG<br>
        HDR: DisplayHDR 400</p>
        </div>',
                'colors' => '#000000',
                'price' => 799900,
                'discount' => 749900,
                'tag' => 'New',
                'category_id' => 3,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Samsung Odyssey G7',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Size: 32"<br>
        Resolution: 2560 x 1440 (QHD)<br>
        Panel: VA Curved 1000R<br>
        Refresh Rate: 240Hz<br>
        Response Time: 1ms GtG<br>
        HDR: DisplayHDR 600</p>
        </div>',
                'colors' => '#000000,#ffffff',
                'price' => 699900,
                'discount' => 649900,
                'tag' => 'Hot',
                'category_id' => 3,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Dell S2721DGF',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Size: 27"<br>
        Resolution: 2560 x 1440 (QHD)<br>
        Panel: IPS<br>
        Refresh Rate: 165Hz<br>
        Response Time: 1ms GtG<br>
        HDR: DisplayHDR 400</p>
        </div>',
                'colors' => '#000000',
                'price' => 449900,
                'discount' => 429900,
                'tag' => 'New',
                'category_id' => 3,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'MSI Optix MAG274QRF-QD',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Size: 27"<br>
        Resolution: 2560 x 1440 (QHD)<br>
        Panel: Rapid IPS<br>
        Refresh Rate: 165Hz<br>
        Response Time: 1ms GtG<br>
        HDR: DisplayHDR 400</p>
        </div>',
                'colors' => '#000000',
                'price' => 529900,
                'discount' => 499900,
                'tag' => 'Hot',
                'category_id' => 3,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Xbox Wireless Controller',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Connection: Xbox Wireless, Bluetooth<br>
        Battery: 2x AA Batteries<br>
        Features: Share button, New D-pad<br>
        Compatibility: Xbox Series X|S, Xbox One, Windows 10/11<br>
        Battery Life: Up to 40 hours</p>
        </div>',
                'colors' => '#000000,#ffffff,#0000ff',
                'price' => 59900,
                'discount' => 54900,
                'tag' => 'Hot',
                'category_id' => 4,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Sony DualSense',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Connection: Bluetooth, USB-C<br>
        Features: Haptic feedback, Adaptive triggers<br>
        Battery: Built-in rechargeable<br>
        Compatibility: PS5, PC<br>
        Battery Life: Up to 12 hours</p>
        </div>',
                'colors' => '#ffffff,#000000',
                'price' => 69900,
                'discount' => 64900,
                'tag' => 'New',
                'category_id' => 4,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Nintendo Switch Pro Controller',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Connection: Bluetooth, USB-C<br>
        Battery: Rechargeable Lithium-ion<br>
        Features: HD Rumble, Motion Controls<br>
        Compatibility: Nintendo Switch<br>
        Battery Life: Up to 40 hours</p>
        </div>',
                'colors' => '#000000,#ffffff',
                'price' => 59900,
                'discount' => 54900,
                'tag' => 'Hot',
                'category_id' => 4,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Razer Wolverine V2 Chroma',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Connection: Wired USB<br>
        Features: Adjustable Trigger Stops<br>
        Compatibility: Xbox Series X|S, Xbox One, PC<br>
        Programmable Buttons: 6<br>
        Chroma RGB Lighting</p>
        </div>',
                'colors' => '#000000',
                'price' => 79900,
                'discount' => 74900,
                'tag' => 'New',
                'category_id' => 4,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'SanDisk Extreme Pro USB 3.2',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Capacity: 256GB<br>
        Read Speed: Up to 420MB/s<br>
        Write Speed: Up to 380MB/s<br>
        Interface: USB 3.2 Gen 2<br>
        Material: Metal<br>
        Water & Shock Resistant</p>
        </div>',
                'colors' => '#000000,#silver',
                'price' => 89900,
                'discount' => 79900,
                'tag' => 'Hot',
                'category_id' => 5,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Kingston DataTraveler Kyson',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Capacity: 128GB<br>
        Read Speed: Up to 100MB/s<br>
        Write Speed: Up to 60MB/s<br>
        Interface: USB 3.2 Gen 1<br>
        Compact Design<br>
        Metal Capless Design</p>
        </div>',
                'colors' => '#000000,#silver',
                'price' => 29900,
                'discount' => 24900,
                'tag' => 'New',
                'category_id' => 5,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Samsung BAR Plus',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Capacity: 128GB<br>
        Read Speed: Up to 300MB/s<br>
        Write Speed: Up to 200MB/s<br>
        Interface: USB 3.1<br>
        Metal Body<br>
        Shock & Water Resistant</p>
        </div>',
                'colors' => '#silver,#black',
                'price' => 59900,
                'discount' => 54900,
                'tag' => 'Hot',
                'category_id' => 5,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Lexar JumpDrive Tough',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Capacity: 64GB<br>
        Read Speed: Up to 150MB/s<br>
        Write Speed: Up to 60MB/s<br>
        Interface: USB 3.1<br>
        Rugged Design<br>
        Water & Shock Proof</p>
        </div>',
                'colors' => '#000000,#orange',
                'price' => 39900,
                'discount' => 34900,
                'tag' => 'New',
                'category_id' => 5,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Corsair Flash Survivor Stealth',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Capacity: 128GB<br>
        Read Speed: Up to 200MB/s<br>
        Write Speed: Up to 100MB/s<br>
        Interface: USB 3.0<br>
        Military-Grade Protection<br>
        Water & Shock Resistant</p>
        </div>',
                'colors' => '#000000',
                'price' => 69900,
                'discount' => 64900,
                'tag' => 'Hot',
                'category_id' => 5,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'JBL Charge 5',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Driver: 2 x 52mm<br>
        Battery Life: Up to 20 hours<br>
        Connectivity: Bluetooth 5.1<br>
        Waterproof: IP67<br>
        Power Bank Function<br>
        Frequency Response: 65Hz-20kHz</p>
        </div>',
                'colors' => '#black,#blue,#red',
                'price' => 129900,
                'discount' => 119900,
                'tag' => 'Hot',
                'category_id' => 6,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Sony SRS-XB43',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Driver: 61mm x 2<br>
        Battery Life: Up to 24 hours<br>
        Connectivity: Bluetooth 5.0<br>
        Waterproof: IP67<br>
        EXTRA BASS™ Technology<br>
        Frequency Response: 20Hz-20kHz</p>
        </div>',
                'colors' => '#black,#blue',
                'price' => 159900,
                'discount' => 149900,
                'tag' => 'New',
                'category_id' => 6,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'UE Boom 3',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Driver: Custom-Designed<br>
        Battery Life: Up to 15 hours<br>
        Connectivity: Bluetooth 5.0<br>
        Waterproof: IP67<br>
        360-Degree Sound<br>
        Frequency Response: 90Hz-20kHz</p>
        </div>',
                'colors' => '#black,#blue,#red',
                'price' => 99900,
                'discount' => 89900,
                'tag' => 'Hot',
                'category_id' => 6,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Marshall Kilburn II',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Driver: 2 x 4" Woofer & Tweeter<br>
        Battery Life: Up to 20 hours<br>
        Connectivity: Bluetooth 5.0<br>
        Vintage Design<br>
        Multi-Directional Sound<br>
        Frequency Response: 20Hz-20kHz</p>
        </div>',
                'colors' => '#black,#brown',
                'price' => 179900,
                'discount' => 169900,
                'tag' => 'New',
                'category_id' => 6,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Bose SoundLink Revolve+',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Driver: Proprietary Transducer<br>
        Battery Life: Up to 17 hours<br>
        Connectivity: Bluetooth 4.2<br>
        Waterproof: IPX4<br>
        360-Degree Sound<br>
        Frequency Response: 100Hz-16kHz</p>
        </div>',
                'colors' => '#black,#blue',
                'price' => 149900,
                'discount' => 139900,
                'tag' => 'Hot',
                'category_id' => 6,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Anker PowerCore 10000',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Capacity: 10000mAh<br>
        Output: 18W PD Fast Charging<br>
        Ports: USB-C, USB-A<br>
        Weight: 180g<br>
        Size: 92 x 60 x 22 mm<br>
        Compatibility: Smartphones, Tablets</p>
        </div>',
                'colors' => '#black,#blue',
                'price' => 49900,
                'discount' => 44900,
                'tag' => 'Hot',
                'category_id' => 7,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'UGREEN 145W GaN PowerBank',
                'image_name' => '1.jpg',
                'description' => '<div class="ng-scope">
        <p>Capacity: 25000mAh<br>
        Max Output: 145W Power Delivery<br>
        Ports: 2x USB-C, 1x USB-A<br>
        Fast Charging: Laptop, Smartphone, Tablet<br>
        GaN Technology: Compact & Efficient<br>
        LCD Digital Display<br>
        Compatibility: MacBook Pro, Dell XPS, iPad Pro, Smartphones</p>
        </div>',
                'colors' => '#black',
                'price' => 199900,
                'discount' => 189900,
                'tag' => 'Hot',
                'category_id' => 7,
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
        ));
    }
}