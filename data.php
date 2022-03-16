
    <?php 
    require_once('item.php');

    $curryLou = new Item('カレールー',210,'./image/curryLou.jpg');
    $potatoes = new Item('じゃがいも',30,'./image/potates.jpg');
    $carrots = new Item('にんじん',40,'./image/carrots.jpg');
    $onion = new Item('たまねぎ',30,'./image/onion.jpg');
    $meat = new Item('おにく',300,'./image/meat.jpg');
    $apple = new Item('りんご',100,'./image/apple.jpg');
    $banana = new Item('ばなな',80,'./image/banana.Jpg');
    $beanSprouts = new Item('もやし',20,'./image/beanSprouts.jpg');
    $cake = new Item('ケーキ',150,'./image/cake.jpg');
    $fish = new Item('さかな',300,'./image/fish.jpg');
    $lettuce = new Item('レタス',50,'./image/lettuce.jpg');
    $pudding = new Item('プリン',100,'./image/pudding.jpg');
    $seaweed = new Item('のり',100,'./image/seaweed.jpg');

    $currys = array($curryLou, $potatoes, $carrots, $onion);
    $makizushis = array($fish,$seaweed,$lettuce,$pudding,$cake);
    $meatAndPotatoes = array($potatoes,$meat,$onion,$apple,$banana,$pudding,$cake);
    $friedVegetables = array($lettuce,$meat,$carrots,$onion,$beanSprouts,$apple,$banana,$pudding,$cake);

    ?>