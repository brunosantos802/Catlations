#! /usr/bin/python3

import random
import os

img_list = os.listdir('./image')

index = random.randint(0, len(img_list)-1)

print(img_list[index])
