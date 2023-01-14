sudo apt-get install rar unrar p7zip-full -y
unrar x "1chan_ru.*.rar"
mv 1chan_dump.squashfs ../1chan_dump/1chan_dump.squashfs
cd ../1chan_dump/
7z x '1chan_dump.squashfs' -aoa
cd ./news_index/files/
mv news_index_0centrifuge.js _news_index_0centrifuge.js
cd ../../news_all_index/files/
mv news_all_index_0centrifuge.js _news_all_index_0centrifuge.js
cd ../../1/files/
mv 10002centrifuge.js _10002centrifuge.js
cd ../../100k/files/
mv 100044centrifuge.js _100044centrifuge.js
cd ../../200k/files/
mv 200000centrifuge.js _200000centrifuge.js
cd ../../300k/files/
mv 300086centrifuge.js _300086centrifuge.js
cd ../../400k/files/
mv 400064centrifuge.js _400064centrifuge.js
cd ../../500k/files/
mv 568731centrifuge.js _568731centrifuge.js
cd ../../600k/files/
mv 600004centrifuge.js _600004centrifuge.js
cd ../../700k/files/
mv 700123centrifuge.js _700123centrifuge.js
cd ../../800k/files/
mv 800031centrifuge.js _800031centrifuge.js
cd ../../900k/files/
mv 900002centrifuge.js _900002centrifuge.js
cd ../../1000k/files/
mv 1000001centrifuge.js _1000001centrifuge.js
cd ../../1100k/files/
mv 1100000centrifuge.js _1100000centrifuge.js
cd ../../1200k/files/
mv 1200011centrifuge.js _1200011centrifuge.js
cd ../../1300k/files/
mv 1300063centrifuge.js _1300063centrifuge.js
cd ../../1400k/files/
mv 1400011centrifuge.js _1400011centrifuge.js
cd ../../1500k/files/
mv 1500029centrifuge.js _1500029centrifuge.js
cd ../../1600k/files/
mv 1600017centrifuge.js _1600017centrifuge.js
cd ../../1700k/files/
mv 1700003centrifuge.js _1700003centrifuge.js
cd ../../1800k/files/
mv 1800077centrifuge.js _1800077centrifuge.js
cd ../../1900k/files/
mv 1900026centrifuge.js _1900026centrifuge.js
cd ../../2000k/files/
mv 2000010centrifuge.js _2000010centrifuge.js
cd ../../2100k/files/
mv 2100078centrifuge.js _2100078centrifuge.js
cd ../../2200k/files/
mv 2200033centrifuge.js _2200033centrifuge.js
cd ../../2300k/files/
mv 2300023centrifuge.js _2300023centrifuge.js
cd ../../2400k/files/
mv 2400009centrifuge.js _2400009centrifuge.js
cd ../../2500k/files/
mv 2500005centrifuge.js _2500005centrifuge.js
cd ../../2600k/files/
mv 2600002centrifuge.js _2600002centrifuge.js
cd ../../2700k/files/
mv 2700000centrifuge.js _2700000centrifuge.js
cd ../../2800k/files/
mv 2800000centrifuge.js _2800000centrifuge.js
cd ../../2900k/files/
mv 2900018centrifuge.js _2900018centrifuge.js
cd ../../3000k/files/
mv 3000003centrifuge.js _3000003centrifuge.js
cd ../../3100k/files/
mv 3100004centrifuge.js _3100004centrifuge.js
cd ../../3200k/files/
mv 3200000centrifuge.js _3200000centrifuge.js
cd ../../3300k/files/
mv 3300002centrifuge.js _3300002centrifuge.js
cd ../../3400k/files/
mv 3400005centrifuge.js _3400005centrifuge.js
cd ../../3500k/files/
mv 3500001centrifuge.js _3500001centrifuge.js
cd ../../../
sudo chmod -R 777 1chan_dump
cd ./uploads
