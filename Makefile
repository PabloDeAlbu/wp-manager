include .env
DUMP_DIR = dumps
DATE = $(shell date +\%Y\%m\%d\%H)

# Establece el valor por defecto de WP_PATH si no está definido en .env
WP_PATH ?= wordpress

db-export:
	mkdir -p $(DUMP_DIR)
	lando wp --path=$(WP_PATH) db export $(DUMP_DIR)/$(WP_PATH)-$(DATE).sql

core-check-update:
	lando wp --path=wordpress/ core check-update

dry-run:
	echo -e "Update del día $(shell date +\%Y-\%m-\%d) \n" > logs/update_$(DATE).txt
	lando wp --path=$(WP_PATH) plugin update --dry-run --all >> logs/update_$(DATE).txt
	lando wp --path=$(WP_PATH) theme update --all >> logs/update_$(DATE).txt
	lando wp --path=$(WP_PATH) core check-update >> logs/update_$(DATE).txt

backup:
	lando wp --path=$(WP_PATH) db export backup.sql

restore-backup:
	lando wp --path=$(WP_PATH) db import backup.sql
	git checkout -- .
	@exit 1

update-all:
	lando wp --path=$(WP_PATH) plugin update --all || $(MAKE) restore-backup
	lando wp --path=$(WP_PATH) theme update --all || $(MAKE) restore-backup
	lando wp --path=$(WP_PATH) core || $(MAKE) restore-backup

update: dry-run backup update-all db-export
	git add .
	git commit -m "update $(DATE)"
#	git push
