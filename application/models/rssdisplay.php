<?php
class RssDisplay extends Model {
    protected $feed_url;
    protected $num_items;
    public function __construct($url){
        parent::__construct();
        $this->feed_url = $url;
    }
    public function getFeedItems($num_feed_items){
        $rss = simplexml_load_file($this->feed_url);
        $num_items = $num_feed_items;
//        for($x=0; $x<=$num_items; x++){
//            $items[$x] = $rss->channel->item[$x];
//        }
//        return items();
        $x = 0;
        foreach($rss->channel->item as $item){
            if($x < $num_items){
                $items[$x] = $item;
//                $items[$x]['title'] = $item->title;
//                $items[$x]['desc'] = $item->description;
//                $items[$x]['link'] = $item->link;
//                $items[$x]['pubDate'] = $item->pubDate;
                $x++;
            }
        }
        return $items;
    }
    //title, description, link, and pubDate
    public function getChannelInfo(){
        $items = simplexml_load_file($this->feed_url);
        $info = $items->channel;
        return $info;
    }
}