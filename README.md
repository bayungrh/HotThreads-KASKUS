# HotThreads-KASKUS

Kaskus Hot Threads.

APi Host <code>https://api.bayyu.net</code>

## Set Up Api Key
Insert your API Key in function
<code>$kaskus_ht->setApiKey('YOUR_API_KEY')</code>

## How Get Api Key?
Please submit request to [Request Key](https://api.bayyu.net/contact)

## Example Request
JSON Response:
<pre>
{
    "success": true,
    "response_code": 1,
    "load_time": 0.3019,
    "page": 1,
    "total_pages": "2863",
    "hot_threads": [
        {
            "position": 1,
            "top_star": true,
            "rating": "4.64",
            "reply": "87",
            "title": "Analisis Keekonomian Metanol Nuklir Dari Air Laut",
            "detail": "Tidak, saya tidak bilang bahwa air laut bisa dikonversi menjadi metanol. Sama sekali tidak. Menjadikan air sebagai sumber energi itu mustahil, semustahil manusia melanggar Hukum",
            "link": "https:\/\/kaskus.co.id\/thread\/596730df9252336c778b4575\/analisis-keekonomian-metanol-nuklir-dari-air-laut\/?ref=htarchive&med=hot_thread",
            "img": "https:\/\/s.kaskus.id\/r720x720\/img\/hot_thread\/hot_thread_fbow4xjtk0z3.jpg",
            "user": {
                "id": "dic.thorium",
                "profile": "https:\/\/kaskus.co.id\/profile\/8485471\/?ref=htarchive&med=hot_thread",
                "avatar": "https:\/\/s.kaskus.id\/user\/avatar\/2016\/01\/29\/avatar8485471_2.gif"
            },
            "forum": {
                "name": "Sains & Teknologi",
                "link": "https:\/\/kaskus.co.id\/forum\/597"
            }
        },
        ..................
}
</pre>
