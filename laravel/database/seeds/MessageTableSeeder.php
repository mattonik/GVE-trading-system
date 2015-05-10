<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Message;

class MessageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('messages')->delete();

        Message::create([
        	'from_id' => 1,
            'to_id' => 2,
            'subject' => 'Massa metus dictum. Nulla risus.',
            'message' => 'Massa metus dictum. Nulla risus. Curae neque convallis nonummy tempor nec nisl quam habitant vestibulum penatibus. Fusce felis arcu et sollicitudin varius metus montes platea feugiat laoreet libero eni ve donec dis lorem duis lacinia commodo habitasse. Neque augue metus duis laoreet luctus. Ipsum vitae tellus ad class dui. Metus purus libero netus laoreet proin orci. Nulla porta dignissim sit dolor elementum enim integer in. Dolor justo nostra integer aliquet urna erat interdum. Netus metus amet quis lectus pretium. Porta proin. Lacus neque dictumst at arcu.'
        ]);

        Message::create([
            'from_id' => 1,
            'to_id' => 3,
            'subject' => 'Massa metus dictum. Nulla risus.',
            'message' => 'Massa metus dictum. Nulla risus. Curae neque convallis nonummy tempor nec nisl quam habitant vestibulum penatibus. Fusce felis arcu et sollicitudin varius metus montes platea feugiat laoreet libero eni ve donec dis lorem duis lacinia commodo habitasse. Neque augue metus duis laoreet luctus. Ipsum vitae tellus ad class dui. Metus purus libero netus laoreet proin orci. Nulla porta dignissim sit dolor elementum enim integer in. Dolor justo nostra integer aliquet urna erat interdum. Netus metus amet quis lectus pretium. Porta proin. Lacus neque dictumst at arcu.'
        ]);

        Message::create([
            'from_id' => 2,
            'to_id' => 3,
            'subject' => 'Massa metus dictum. Nulla risus.',
            'message' => 'Massa metus dictum. Nulla risus. Curae neque convallis nonummy tempor nec nisl quam habitant vestibulum penatibus. Fusce felis arcu et sollicitudin varius metus montes platea feugiat laoreet libero eni ve donec dis lorem duis lacinia commodo habitasse. Neque augue metus duis laoreet luctus. Ipsum vitae tellus ad class dui. Metus purus libero netus laoreet proin orci. Nulla porta dignissim sit dolor elementum enim integer in. Dolor justo nostra integer aliquet urna erat interdum. Netus metus amet quis lectus pretium. Porta proin. Lacus neque dictumst at arcu.'
        ]);

        Message::create([
            'from_id' => 2,
            'to_id' => 1,
            'subject' => 'Porta morbi.',
            'message' => 'Porta morbi. Donec curae nascetur non euismod felis. Dolor neque litora vitae ullamcorper. Fames morbi. Lorem augue. Fusce justo. Fames risus. Morbi vitae rutrum vitae dapibus vehicula litora odio suspendisse vel arcu pellentesque ut magna. Porta netus nisl conubia ve interdum dapibus mollis enim arcu cras vel consectetuer. Fames magna curabitur eget enim dignissim non nibh cum a. Magna proin suscipit metus sollicitudin augue eu ligula dictumst. Dolor massa justo sodales laoreet platea sociis eni arcu sed posuere libero dis. Nulla curae faucibus lorem. Class nulla class tortor ligula eni id lacus auctor sollicitudin. Morbi metus tellus aenean ridiculus cubilia justo orci nibh morbi. Neque nulla nascetur arcu sociis tellus at auctor id mattis posuere ad cursus hac amet aliquam. Fames velit accumsan hac pede suscipit.'
        ]);

        Message::create([
            'from_id' => 3,
            'to_id' => 1,
            'subject' => 'Porta morbi.',
            'message' => 'Porta morbi. Donec curae nascetur non euismod felis. Dolor neque litora vitae ullamcorper. Fames morbi. Lorem augue. Fusce justo. Fames risus. Morbi vitae rutrum vitae dapibus vehicula litora odio suspendisse vel arcu pellentesque ut magna. Porta netus nisl conubia ve interdum dapibus mollis enim arcu cras vel consectetuer. Fames magna curabitur eget enim dignissim non nibh cum a. Magna proin suscipit metus sollicitudin augue eu ligula dictumst. Dolor massa justo sodales laoreet platea sociis eni arcu sed posuere libero dis. Nulla curae faucibus lorem. Class nulla class tortor ligula eni id lacus auctor sollicitudin. Morbi metus tellus aenean ridiculus cubilia justo orci nibh morbi. Neque nulla nascetur arcu sociis tellus at auctor id mattis posuere ad cursus hac amet aliquam. Fames velit accumsan hac pede suscipit.'
        ]);
    }

}