#!/bin/bash

#=================================================
# COMMON VARIABLES AND CUSTOM HELPERS
#=================================================

main_domain=$(cat /etc/yunohost/current_host)
timezone=$(timedatectl show --value --property=Timezone)
