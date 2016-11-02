##sve u uglastim zagradama [] zameni

#Kloniranje repozitorijuma
	git clone [link repozitorije]

#Proveravanje statusa za commit
	git status

#Dodavanje za commit
	git add [fajl koji hoces da dodas, . (tacka) za dodavanje svega]

#Commitovanje
	git commit -m "[poruka]"

#pullovanje novih promena na repo
	git pull origin [branch, (za sada cemo koristiti maste "git pull origin master")]

#pushovanje commitovanih promena na repo
	git push origin [branch (isto kako pull)]

Ovako, prvo se projekat klonira, kada napravis neke promene das "git status"
da proveris sta si menjao, pogledas koje promene hoces da podignes na github i dodas ih sa "git add".
Vecinom ces dodavati sve tako da ce komanda izgledati "git add ." ovako.
Polse add-a moras da commitujes promene, 'git commit -m "ovde napises strucno kakve promene su odradjene"' 
vecinom se u message pisu dva tri slova max, da bude pregledno

Posle commitovanja uvek uradis prvo pull pa onda push, da ne bi doslo do konflikata i do brisanja promena
(ako je npr neko drugi radio na istom fajlu kao i ti, moze se desiti da se njegove promene obrisu ako si samo pullovao)

Sve ce ti ovo biti jasnije, kad krenes malo da koristis


#kasnije cemo i ovim komandama

git reset --hard origin/master
git stash


