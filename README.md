# HotThreads-KASKUS

Kaskus Hot Threads.

APi Host <code>https://api.bayyu.net</code>

## Set Up Api Key
Insert your API Key in function
<code>$kaskus_ht->setApiKey('YOUR_API_KEY')</code>

## How Get Api Key?
Please submit request to [Request Key](https://api.bayyu.net/contact)

## Example Request
Json
<pre>
{
    "success": true,
    "response_code": 1,
    "load_time": 0.3809,
    "page": 1,
    "total_pages": "2863",
    "hot_threads": [
        {
            "position": 1,
            "top_star": true,
            "rating": "",
            "reply": "36",
            "title": "5 Aktris Indonesia Ini Jadi Idaman Cowok Korea",
            "detail": "Remaja-remaja Indonesia saat ini banyak sekali yang menggandrungi artis-artis Korea. Mulai dari\u00a0boyband,\u00a0girlband\u00a0hingga pemain dramanya. Dengan tubuh yang langsing,",
            "link": "https:\/\/kaskus.co.id\/thread\/5967857631e2e6aa768b4571\/5-aktris-indonesia-ini-jadi-idaman-cowok-korea\/?ref=htarchive&med=hot_thread",
            "img": "https:\/\/s.kaskus.id\/r720x720\/img\/hot_thread\/hot_thread_fbow4xkhu8sh.jpg",
            "user": {
                "id": "babedorr",
                "profile": "https:\/\/kaskus.co.id\/profile\/9817682\/?ref=htarchive&med=hot_thread",
                "avatar": "https:\/\/s.kaskus.id\/user\/avatar\/2017\/07\/06\/avatar9817682_1.gif"
            },
            "forum": {
                "name": "The Lounge",
                "link": "https:\/\/kaskus.co.id\/forum\/21"
            }
        },
        ..................
}
</pre>
