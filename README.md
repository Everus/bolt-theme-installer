## Bolt themes install plugin
### Usage
Just add
```json
{    
    "name": "supplychain1/theme-<packagename>",
    "type": "bolt-template",
    "require": {
        "supplychain1/supplychain-theme-installer": "dev-master"
    },
    "repositories": [
        {
            "type": "vcs",
            "url":  "git@bitbucket.org:supplychain1/supplychain-theme-installer.git"
        }
    ]
}
```
to your composer.json