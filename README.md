# Brizy Messages

This library contain message classes that are sent between Brizy service.

## Please do not commit/pr or do any changes on this lib. All files here are generated.

## Integration with symfony

1. Add the next snipped in services.yaml

```yaml
    # https://github.com/Happyr/message-serializer
    _instanceof:
      BrizyMessage\Transformer\TransformerInterface:
            tags:
                - { name: 'brizy.message_serializer.transformer'}

      BrizyMessage\Hydrator\HydratorInterface:
            tags:
                - { name: 'brizy.message_serializer.hydrator'}
```

2. Create a new config file in config/packages/message_serializer.yaml with the folowing content
```yaml
services:
  BrizySerializer\Serializer:
    autowire: true

  BrizyMessage\Transformer\MessageToArrayInterface: '@brizy.message_serializer.transformer'
  BrizyMessage.message_serializer.transformer:
    class: BrizySerializer\Transformer\Transformer
    arguments: [!tagged brizy.message_serializer.transformer]


  BrizyMessage\Hydrator\ArrayToMessageInterface: '@brizy.message_serializer.hydrator'
  brizy.message_serializer.hydrator:
    class: BrizySerializer\Hydrator\Hydrator
    arguments: [!tagged brizy.message_serializer.hydrator]
```

2. Set the serializer class for each transport you want to use the messages

```yaml 
    serializer: 'BrizyMessage\MessageSerializer\Serializer'
```