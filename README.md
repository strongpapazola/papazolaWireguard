mv wireguard folder to webdir
mv papazolaWireguard to /opt/papazolaApps/

<pre>  306  cd /var/www
  306  git clone https://github.com/strongpapazola/papazolaWireguard
  307  cd papazolaWireguard/
  309  mv wireguard/ ../
  310  cd ..
  312  nano wireguard/application/config/database.php
  314  cd papazolaWireguard/
  315  ls
  316  mysql -u root -p papazolaWireguard < papazolaWireguard.sql
  323  mv papazolaWireguard /opt/
  325  cd ..
  326  rm -r papazolaWireguard/
  327  cd /opt/
  328  ls
  329  cd papazolaWireguard/
  330  ls
  331  cp papazolaWireguard.service /etc/systemd/system/
  332  nano /etc/systemd/system/papazolaWireguard.service
  333  ls
  334  nano user.sh
  335  mv user.sh user.sh.old
  336  mv ~/wire.sh ./
  337  ls
  338  mv wire.sh user.sh
  339  nano papazolaWireguard.py
  340  python3 papazolaWireguard.py
  341  python3 --version
  342  python3 -m pip install mysql-connector
  343  python3 papazolaWireguard.py
  344  nano papazolaWireguard.py
  345  cat /var/www/wireguard/application/config/database.php | grep passw
  346  naon papazolaWireguard.py
  347  nano papazolaWireguard.py
  348  python3 papazolaWireguard.py
  349  chmod +x user.sh
  350  python3 papazolaWireguard.py
  351  systemctl enable papazolaWireguard.service
  352  systemctl start papazolaWireguard.service
  353  systemctl status papazolaWireguard.service
  354  cd /var/www/
  355  l
  356  ls
  357  cd /opt/
  358  ls
  359  cd papazolaWireguard/
  360  ls
  362  nano user.sh
  363  ls
  364  history</pre>
