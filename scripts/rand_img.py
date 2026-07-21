#! /usr/bin/python3

import random
import os

output = os.popen('ls ./image').read()

img_list = output.splitlines()

index = random.randint(0, len(img_list)-1)

print(img_list[index])

