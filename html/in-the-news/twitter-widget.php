
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'from:taoisttaichisoc OR from:taichitaoiste OR from:ttcsdunedin OR from:miamitaoist OR from:TaoistTaiChi_MW',
  interval: 30000,
  title: 'Taoist Tai Chi Society and Friends',
  subject: '',
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#6495ed',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#025a9e'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    toptweets: false,
    behavior: 'default'
  }
}).render().start();
</script>


